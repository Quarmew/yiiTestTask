<?
use yii\helpers\Html;
use yii\helpers\Url;

?>
<main id="calc-body">
    <div class="breadcrunch">
        <a href="<?php echo Url::toRoute(['calc/body']) ?>"><i class="fa-solid fa-arrow-right"></i>ВЫБОР МОДЕЛИ</a>
        <a>ОКРАС ДЕТАЛЕЙ</a>
        <a>ЗАПИСАТЬСЯ</a>
    </div>
    <h1>Калькулятор кузовного ремонта</h1>
    <p>ВЫБЕРИТЕ КЛАСС АВТОМОБИЛЯ</p>
    <div class=" wrapper">
        <?
        foreach ($bodies as $body):
            ?>
            <a href="<?= Url::toRoute(['calc/element', 'class_id' => $body->id]) ?>">
                <?= Html::img("@web/img/body{$body->id}.svg"); ?>
                <p>
                    <?= $body->name ?>
                </p>
            </a>
        <?
        endforeach
        ?>
    </div>
</main>
<?= $this->render('//site/why'); ?>