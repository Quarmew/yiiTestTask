<?php
use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Главная страница';
if (Yii::$app->session->hasFlash('success_order')): ?>
<div class="success_order">
    <p>Ваше сообщение успешно отправлено. В ближайшее время с вами свяжется специалист.</p>
</div>
<?
endif;
?>
<section id="services">
    <div class="shading">
        <div id="wrapper">
            <h1>КУЗОВНОЙ РЕМОНТ В МИАССЕ</p>
                <div class="articles">
                    <a class="article" href="<?php echo Url::toRoute(['site/remont']) ?>">
                        <div class="front">
                            <div>
                                <?= \yii\helpers\Html::img("@web/img/service1.svg"); ?>
                                <p>кузовой ремонт</p>
                            </div>
                        </div>
                        <div class="back">
                            <h4>кузовой ремонт</h4>
                            <p>Мы производим кузовной ремонт Вашего автомобиля в соответствии с технологиями, принятыми
                                во всем мире</p>
                        </div>
                    </a>
                    <a class="article" href="<?php echo Url::toRoute(['site/remont']) ?>"">
                        <div class="front">
                            <div>
                                <?= \yii\helpers\Html::img("@web/img/service2.svg"); ?>
                                <p>удаление вмятин без покраски</p>
                            </div>
                        </div>
                        <div class="back">
                            <h4>кузовой ремонт</h4>
                            <p>Мы производим кузовной ремонт Вашего автомобиля в соответствии с технологиями, принятыми
                                во всем мире</p>
                        </div>
                    </a>
                    <a class="article" href="<?php echo Url::toRoute(['site/remont']) ?>"">
                        <div class="front">
                            <div>
                                <?= \yii\helpers\Html::img("@web/img/service3.svg"); ?>
                                <p>окраска</p>
                            </div>
                        </div>
                        <div class="back">
                            <h4>кузовой ремонт</h4>
                            <p>Мы производим кузовной ремонт Вашего автомобиля в соответствии с технологиями, принятыми
                                во всем мире</p>
                        </div>
                    </a>
                    <a class="article" href="<?php echo Url::toRoute(['site/remont']) ?>"">
                        <div class="front">
                            <div>
                                <?= \yii\helpers\Html::img("@web/img/service4.svg"); ?>
                                <p>глубокая полировка кузова</p>
                            </div>
                        </div>
                        <div class="back">
                            <h4>кузовой ремонт</h4>
                            <p>Мы производим кузовной ремонт Вашего автомобиля в соответствии с технологиями, принятыми
                                во всем мире</p>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</section>
<section id="red-line">
    <div class="container">
        <?= \yii\helpers\Html::img("@web/img/home.svg"); ?>
        <div>
            <p>г.миасс</p>
            <p>тургоякское шоссе, 5а/1</p>
        </div>
        <a style="opacity: 0">

            <p >
                <i class="far fa-calendar-alt"></i>
                записаться на осмотр
            </p>
        </a>
    </div>
</section>
<section id="text">
    <div class="container">
        <div>
            <h3>Кузовной ремонт любой сложности в Миассе</h3>
            <h4>Квалифицированные услуги ремонта кузова</h4>
            <p><strong>Кузовной ремонт</strong> — один из самых сложных видов авторемонта. От его качества напрямую
                зависит
                внешний вид (а значит и стоимость), долговечность и безопасность автомобиля. Осуществить кузовной ремонт
                своими руками — практически нерешаемая задача. Ее лучше доверить специалистам-профессионалам.</p>
            <p>Мы производим кузовной ремонт Вашего автомобиля в соответствии с технологиями, принятыми во всем мире.
                Для нас не проблема качественно восстановить кузовавтомобиля, вернуть ему прежнюю геометрию, обеспечить
                равномерные зазоры и нормальное открывание дверей.</p>
        </div>
    </div>
</section>
<section id="advantages">
    <div class="shading">
        <div class="container">
            <h3>Наши преимущества</h3>
            <div id="advantages_group">
                <div class="advantage">
                    <p>
                        <i class="far fa-calendar-alt"></i>
                    </p>
                    <h4>ГАРАНТИЯ 1 ГОД НА ВЫПОЛНЕННЫЕ РАБОТЫ</h4>
                </div>
                <div class="advantage">
                    <p>
                        <i class="far fa-calendar-alt"></i>
                    </p>
                    <h4>ГАРАНТИЯ 1 ГОД НА ВЫПОЛНЕННЫЕ РАБОТЫ</h4>
                </div>
                <div class="advantage">
                    <p>
                        <i class="far fa-calendar-alt"></i>
                    </p>
                    <h4>ГАРАНТИЯ 1 ГОД НА ВЫПОЛНЕННЫЕ РАБОТЫ</h4>
                </div>
                <div class="advantage">
                    <p>
                        <i class="far fa-calendar-alt"></i>
                    </p>
                    <h4>ГАРАНТИЯ 1 ГОД НА ВЫПОЛНЕННЫЕ РАБОТЫ</h4>
                </div>
                <div class="advantage">
                    <p>
                        <i class="far fa-calendar-alt"></i>
                    </p>
                    <h4>ГАРАНТИЯ 1 ГОД НА ВЫПОЛНЕННЫЕ РАБОТЫ</h4>
                </div>
                <div class="advantage">
                    <p>
                        <i class="far fa-calendar-alt"></i>
                    </p>
                    <h4>ГАРАНТИЯ 1 ГОД НА ВЫПОЛНЕННЫЕ РАБОТЫ</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="examples">
    <div class="container">
        <h3>Примеры кузовных работ</h3>
        <div>
            <h4>Ремонт бамперов, восстановление пластика</h4>
            <p>Обратившись в «DU PONT», Вы можете быть уверены, что <strong>оперативно</strong> получите высококлассный
                ремонт кузова. В
                работе мы используем оборудование последнего поколения, что являентся гарантией отлитчного результата,
                несмотря на сложность ремонта.</p>
            <p>Ремонт кузова в «DU PONT» — это полная и локальная покраска, подбор эмалей, обработка антикоррозийными
                материалами, устранение местных повреждений, полировка, замена отдельных эллементов и восстановление
                геометрии кузова на стапеле.</p>
            <p>Мы гарантируем, что Вы останетесь довольны, если обратитесь с проблемой кузовного ремонта именно к нам!
            </p>
        </div>
        <div class="before-after_group">
            <div class="before-after_container">
                <div class="image_container">
                    <?= \yii\helpers\Html::img("@web/img/before1.jpg", ['class' => 'image-before slider-image']); ?>
                    <?= \yii\helpers\Html::img("@web/img/after1.jpg", ['class' => 'image-after slider-image']); ?>
                </div>
                <input type="range" min="0" max="100" value="50" class="slider" />
                <div class="slider-line"></div>
                <div class="slider-btn" area-hidden="true">
                    <i class="fa-solid fa-arrows-left-right-to-line"></i>
                </div>
            </div>

            <div class="before-after_container">
                <div class="image_container">
                    <?= \yii\helpers\Html::img("@web/img/before2.jpg", ['class' => 'image-before slider-image']); ?>
                    <?= \yii\helpers\Html::img("@web/img/after2.jpg", ['class' => 'image-after slider-image']); ?>
                </div>
                <input type="range" min="0" max="100" value="50" class="slider" />
                <div class="slider-line"></div>
                <div class="slider-btn" area-hidden="true">
                    <i class="fa-solid fa-arrows-left-right-to-line"></i>
                </div>
            </div>
            <div class="before-after_container">
                <div class="image_container">
                    <?= \yii\helpers\Html::img("@web/img/before3.jpg", ['class' => 'image-before slider-image']); ?>
                    <?= \yii\helpers\Html::img("@web/img/after3.jpg", ['class' => 'image-after slider-image']); ?>
                </div>
                <input type="range" min="0" max="100" value="50" class="slider" />
                <div class="slider-line"></div>
                <div class="slider-btn" area-hidden="true">
                    <i class="fa-solid fa-arrows-left-right-to-line"></i>
                </div>
            </div>
            <div class="before-after_container">
                <div class="image_container">
                    <?= \yii\helpers\Html::img("@web/img/before4.jpg", ['class' => 'image-before slider-image']); ?>
                    <?= \yii\helpers\Html::img("@web/img/after4.jpg", ['class' => 'image-after slider-image']); ?>
                </div>
                <input type="range" min="0" max="100" value="50" class="slider" />
                <div class="slider-line"></div>
                <div class="slider-btn" area-hidden="true">
                    <i class="fa-solid fa-arrows-left-right-to-line"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="lists">
    <div class="container">
        <div class="list">
            <h3>для вас</h3>
            <ul>
                <li>Гарантия 1 год на выполненные работы</li>
                <li>Помощь при взаимодействии со страховой компанией</li>
                <li>Защита кузова вашего автомобиля</li>
                <li>Поиск запчастей для ремонта</li>
            </ul>
        </div>
        <div class="list">
            <h3>о нас</h3>
            <ul>
                <li>Более 19 лет опыта работы в кузовном ремонте</li>
                <li>Своя лаборатория по подбору лакокрасочных покрытий</li>
                <li>Собсвтенная служба снабжения материалами</li>
                <li>Сертифицированные работники</li>
            </ul>
        </div>
</section>
<section id="pricing">
    <h3>Стоимость работ</h3>
    <div class="background">
        <div class="shading">
            <div class="wrapper">
                <div class="titles">
                    <div class="title">
                        <h4>Ремонтные работы</h4>
                    </div>
                    <div class="title">
                        <h4>Защита автомобиля</h4>
                    </div>
                    <div class="title">
                        <h4>Кузовной ремонт</h4>
                    </div>
                </div>
                <div class="body">
                    <div class="fade-in">
                        <p>Ремонт ходовой части <span>от 500 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Покрытие кузова жидким стеклом <span>от 4800 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Окраска элемента <span>от 5500 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Шумоизоляция салона автомобиля <span>от 30 000 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Химчистка салона автомобиля <span>от 2500 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Кузовной ремонт детали <span>от 500 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Удаление вмятин без окраски <span>от 500 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Глубокая полировка лакокрасочного покрытия кузова автомобиля <span>от 3500 рублей</span></p>
                    </div>
                    <div class="fade-in">
                        <p>Восстановление геометрии кузова на стапеле <span>от 2000 рублей</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="reasons">
    <h3>Причины быть нашим клиентом</h3>
    <div class="wrapper">
        <div class="reason r1">
            <div>
                <p>собственный кузовной цех и покрасочная камера</p>
            </div>
        </div>
        <div class="reason r2">
            <div>
                <p>КОМПЬЮТЕРНЫЙ ПОДБОР АВТОЭМАЛЕЙ</p>
            </div>
        </div>
        <div class="reason r3">
            <div>
                <p>ГОД ГАРАНТИИ НА РАБОТЫ</p>
            </div>
        </div>
        <div class="reason r4">
            <div>
                <p>собственный кузовной цех и покрасочная камера</p>
            </div>
        </div>
    </div>
</section>
<?= $this->render('//site/why') ?>