<?
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;

$session = Yii::$app->session;
$session->open();
?>
<section id="calc-account">
    <div class="breadcrunch">
        <a href="<?php echo Url::toRoute(['calc/body']) ?>">ВЫБОР МОДЕЛИ</a>
        <a href="<?php echo Url::toRoute(['calc/element']) ?>"> ОКРАС ДЕТАЛЕЙ</a>
        <a><i class="fa-solid fa-arrow-right"></i> ЗАПИСАТЬСЯ</a>
    </div>
    <h1>Калькулятор кузовного ремонта</h1>
    <p>ВЫБЕРИТЕ ЭЛЕМЕНТЫ КУЗОВА ДЛЯ ПОКРАСКИЯ</p>
    <div class="wrapper">
        <div class="form">
            <p>Остались вопросы? Напиши нам!</p>
            <!-- FOrm -->
            <? $form = ActiveForm::begin(['action'=>Url::toRoute(['calc/result'])]); ?>
            <?= $form->field($model, 'name')->label('')->textInput(['placeholder'=>'Имя']) ?>
            <?= $form->field($model, 'tel')->label('')->textInput(['type' => 'tel','placeholder'=>'Телефон']) ?>
            <?= $form->field($model, 'mark')->label('')->textInput(['placeholder'=>'Марка и модель авто']) ?>
            <?= $form->field($model, 'year')->label('')->textInput(['type' => 'number', 'min' => "1900", 'max' => '2023', 'step' => 1,'placeholder'=>'Год выпуска']) ?>
            <?= Html::submitButton('Записаться', ['class']) ?>
            <? ActiveForm::end(); ?>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Элемент</th>
                    <th>Цена</th>
                </tr>
            </thead>
            <tbody>
                <? $sum = 0;
                foreach ($session['elements'] as $key => $el): ?>
                    <? $sum += $elements[$el - 1]->default_price; ?>
                    <tr>
                        <td>
                            <?= $elements[$el - 1]->name; ?>
                        </td>
                        <td>
                            <?= $elements[$el - 1]->default_price; ?> р.
                        </td>
                    </tr>
                <? endforeach; ?>
                <tr>
                    <td> Ориентировачная стоимость:
                    </td>
                    <td>
                        <?= $sum ?> р.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?= $this->render('//site/why'); ?>