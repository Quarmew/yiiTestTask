<?php
namespace app\controllers;

use app\models\AutoClass;
use app\models\AutoElement;
use app\models\EntryForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Order;
use app\models\OrderAutoElement;

class CalcController extends Controller
{

    public function actionBody()
    {
        //при заходе на перый этап - обнуляем сессию
        Yii::$app->session->destroy();
        //отправляем на вью 3 класса авто
        $bodies = AutoClass::find()->all();
        return $this->render('body', [
            'bodies' => $bodies
        ]);
    }
    public function actionElement()
    {
        //Второй этап рассчёта цены - выбор элементов автомобиля
        //Элементы будут храниться в сессии
        $session = Yii::$app->session;
        $session->open();
        //Если в сессии не хронится класс авто - сохраняем
        if (!$session->has('class_id')) {
            $session['class_id'] = Yii::$app->getRequest()->getQueryParam('class_id');
        }
        //Передаём коэффициент стоимост класса авто и элементы авто на вью
        $elements = AutoElement::find()->all();
        $coefficient = AutoClass::find()->all()[$session['class_id'] - 1]->coefficient;
        return $this->render('element', ['elements' => $elements, 'coefficient' => $coefficient]);
    }
    public function actionAdd()
    {
        //Добавление элемента в сессию
        $element_id = Yii::$app->getRequest()->getQueryParam('id');
        $session = Yii::$app->session;
        $session->open();
        //Если сессия существует
        if ($session->has('elements')) {
            //Но элемент не в сессии, то
            if (!in_array($element_id, $session['elements'])) {
                //добавляем
                $session_elements = $session['elements'];
                array_push($session_elements, $element_id);
                $session['elements'] = $session_elements;
            }
            // иначе создаём сессию
        } else {
            $session['elements'] = [$element_id];
        }
        return $this->redirect(['calc/element']);
    }
    public function actionRemove()
    {
        //Удаление элемента из сессии
        $id = Yii::$app->getRequest()->getQueryParam('id');
        $session = Yii::$app->session;
        $session->open();
        $session_elements = $session['elements'];
        unset($session_elements[$id]);
        $session['elements'] = $session_elements;
        return $this->redirect(['calc/element']);
    }

    public function actionAccount()
    {
        //Третий этап
        //модель для формы
        $model = new EntryForm();
        $session = Yii::$app->session;
        $session->open();
        //данные для отображения
        $elements = AutoElement::find()->all();
        $auto_class = AutoClass::find()->all()[$session['class_id'] - 1];
        return $this->render('account', ['elements' => $elements, 'auto_class' => $auto_class, 'model' => $model]);
    }
    public function actionResult()
    {
        $session = Yii::$app->session;
        $model = new EntryForm();
        //Если данные существуют и проваледированы, то
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                //Создаём Заказ
                $order = new Order();
                $order['name'] = $model['name'];
                $order['tel'] = intval($model['tel']);
                $order['mark'] = $model['mark'];
                $order['year'] = intval($model['year']);
                $order['auto_class_id'] = $session['class_id'];

                $order->save();
                //Создаём записи в общей таблице: 1 заказ = много элементов
                foreach ($session['elements'] as $el) {
                    $oae = new OrderAutoElement();
                    $oae['order_id'] = $order['id'];
                    $oae['auto_element_id'] = $el;
                    $oae->save();
                }
                //Очищаем сессию
                Yii::$app->session->destroy();
                //Устанавливаем флаг success_order = true. На главной странице появится надпись об удачном добавлении заявки.
                $session->setFlash('success_order', true);
                return $this->redirect('site/index');
            } else {

            }
        }
    }
}