<?
use yii\helpers\Html;
use yii\helpers\Url;

$session = Yii::$app->session;
$session->open();
?>
<section id="calc-element">
    <div class="breadcrunch">
        <a href="<?php echo Url::toRoute(['calc/body']) ?>">ВЫБОР МОДЕЛИ</a>
        <a><i class="fa-solid fa-arrow-right"></i> ОКРАС ДЕТАЛЕЙ</a>
        <a>ЗАПИСАТЬСЯ</a>
    </div>
    <h1>Калькулятор кузовного ремонта</h1>
    <p>ВЫБЕРИТЕ ЭЛЕМЕНТЫ КУЗОВА ДЛЯ ПОКРАСКИЯ</p>
    <div class=" wrapper">
        <div class="d-map">
            <? if ($session['class_id'] == 1): ?>
                <svg id="svgcar" viewBox="0 0 640 289">
                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 1]) ?>">
                        <path class="d-part"
                            d="m 229.6903,117.54104 c -5.24921,17.08473 -5.99841,49.52644 5.39179,73.05877 l 114.03638,-2.69589 c -2.44401,-19.21682 -1.32838,-44.84101 -0.26959,-70.36288 l 2.6959,-11.05317 c 1.21432,-15.679961 3.53852,-30.250039 5.39179,-45.291042 -28.59129,0.432587 -44.10528,1.634427 -48.25653,3.504664 -18.35202,5.17574 -36.87469,10.527831 -76.29385,37.472948 l -2.69589,15.3666">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 2]) ?>">
                        <path class="d-part"
                            d="m 166.60634,157.70989 -21.29757,-16.98414 c 4.27806,-4.04384 8.35908,-8.08769 14.01866,-12.13153 16.24348,-4.51492 33.83949,-7.6773 51.4916,-10.78359 2.93564,0.95851 4.82057,2.24536 18.87127,-0.26959 -6.935,24.70576 -3.37168,49.07187 5.39179,73.05877 h 6.20056 l 0.53918,11.05318 -16.71455,-0.80877 c 2.09889,-11.48089 -1.80731,-21.85218 -7.54851,-32.62034 -13.8496,-14.44706 -20.68149,-13.10426 -29.11567,-15.3666 -13.42263,0.59358 -16.58156,2.89779 -21.83676,4.85261 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 3]) ?>">
                        <path class="d-part"
                            d="m 349.02326,187.7907 3.14956,-80.80803 c -0.20113,-14.245495 4.29014,-45.339109 5.78067,-46.447786 l 80.37209,5.209302 c 10.88389,8.304299 24.65593,21.611223 29.76744,34.976744 -10.96184,27.27222 -30.88055,57.55194 -54.32558,84.83721 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 4]) ?>">
                        <path class="d-part"
                            d="m 145.49955,201.38454 c 0.0154,-9.99816 -0.3509,-19.99633 5.78841,-29.99449 4.67247,-5.66739 9.37411,-11.18891 14.73413,-13.41858 l -21.04876,-17.10212 -4.99908,3.94664 c -5.54619,2.86916 -10.39793,3.655 -15.26035,4.47287 l -2.10487,-4.99909 -3.42043,3.94665 c -2.09158,4.47286 -3.68324,8.94572 -3.68353,13.41858 -5.28228,-0.23099 -0.52764,21.04572 -0.78933,31.57314 l -1.31555,2.36799 c -0.0758,1.66636 0.10442,3.33272 2.10488,4.99908 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 5]) ?>">
                        <path class="d-part"
                            d="m 174.4416,124.81967 21.04876,-4.47286 c 2.60619,-4.62336 5.18514,-9.21948 7.10396,-13.15547 -14.53891,2.99328 -29.27191,5.01612 -43.14996,11.3137 -12.83162,5.89866 -15.96904,7.54355 -23.94297,11.31371 l 30.5207,-8.15639 c 2.8065,-0.0214 5.61301,-0.83812 8.41951,3.15731 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 6]) ?>">
                        <path class="d-part"
                            d="m 202.59432,107.19134 -7.10396,13.15547 15.78657,-3.15731 c 16.88128,-12.80466 34.75809,-25.609327 57.88409,-38.413991 16.2296,-6.462977 32.3053,-13.849302 49.20148,-16.312789 l 32.62557,-1.315547 87.33751,4.597013 25.79958,-3.281466 -4.73597,-4.472861 C 425.05963,55.308871 390.97059,50.703774 355.98715,53.253888 330.84564,52.855726 309.40024,55.463899 285.47381,65.356925 260.17552,77.524204 235.0869,90.739808 210.4876,106.40201 Z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 7]) ?>">
                        <path class="d-part"
                            d="m 438.32558,65.744186 25.79958,-3.281466 v 0 l 1.31555,4.999081 c 11.21645,12.509636 23.3465,23.877279 37.36154,32.888689 l 5.78841,6.31463 -29.99448,0.26311 c -3.06001,0.91266 -4.83077,2.68483 -5.78841,4.99908 1.08627,1.47522 11.07654,3.93977 17.89145,6.05151 l 13.41858,11.83993 -16.04968,27.36339 c -10.72045,-1.58784 -10.48081,-8.41746 -35.51978,-3.15731 -11.45423,5.4376 -14.65238,10.87519 -20.25943,16.31279 -2.61018,4.14297 -4.31558,9.19071 -5.5253,14.73413 l -12.99617,0.48639 c 18.84225,-26.39235 39.96732,-46.91459 54.32558,-84.83721 C 462.8454,87.362065 451.2074,76.326979 438.32558,65.744186 Z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 8]) ?>">
                        <path class="d-part"
                            d="m 488.06812,157.18214 c 6.6386,9.38149 14.60142,9.16242 18.68078,37.09844 1.78415,-1.09904 6.03545,-1.70466 11.31371,-2.10488 0.70835,-3.66465 5.72886,-6.46686 9.73505,-9.47194 1.53409,-10.72207 0.71357,-22.62144 -0.52622,-34.73045 -5.07251,-4.82605 -8.08292,-9.99579 -8.94572,-15.52346 l -4.99909,-3.94665 c -2.88146,1.37926 -5.65473,3.29951 -9.20883,1.31555 z">
                        </path>
                    </a>



                    <a href="/<?php echo Url::toRoute(['calc/add', 'id' => 9]) ?>">
                        <path class="d-part"
                            d="m 241.0083,190.59705 0.78933,10.78749 183.38732,-1.57866 1.57866,-14.73413 c -67.20224,2.77347 -125.54529,3.98478 -185.75531,5.5253 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 10]) ?>">
                        <path class="d-part"
                            d="m 464.12516,62.46272 17.36523,-2.631095 4.73597,2.367986 c -1.92844,2.146604 4.33642,-0.0456 -5.78842,5.525299 l 16.31279,17.365229 c -3.14667,-1.137431 5.77763,7.39222 12.36615,13.418583 5.4778,3.771238 7.10145,7.542468 9.20884,11.313708 l 2.63109,9.20883 c -1.80732,4.28681 -4.18344,8.45985 -2.63109,13.41859 l -4.99909,-3.94665 c 1.27688,-3.02816 2.31723,-7.94852 2.89421,-16.57589 -3.95249,-3.63286 -5.71651,-4.34776 -7.63018,-5.26219 -16.7844,-14.379491 -42.07976,-32.634569 -44.4655,-44.2024 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 11]) ?>">
                        <path class="d-part"
                            d="m 237.47368,111.52632 -0.21052,-5.26316 c 2.8415,-2.73684 4.29296,-5.47369 9.68421,-8.210529 2.91421,-0.786587 5.87984,-1.496035 9.89474,-0.631579 L 261.89474,101 c 0.77755,2.95861 1.25749,5.322 1.47368,7.15789 -1.05263,3.64959 -2.10526,4.3254 -3.15789,5.26316 -7.76056,0.45807 -15.52397,0.93327 -22.73685,-1.89473 z">
                        </path>
                    </a>


                </svg>
            <? endif ?>
            <? if ($session['class_id'] == 2): ?>
                <svg id="svgcar" viewBox="0 0 909 511">

                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 4]) ?>">
                        <path class="d-part"
                            d="m 96.41401,360.39982 c -0.107901,-16.75655 -6.656992,-25.69166 5.97916,-57.92314 7.05949,-11.9991 15.76426,-22.35291 28.77473,-28.40103 l -36.622379,-16.8164 c -9.274083,6.35394 -22.649269,11.04635 -50.075493,11.95833 -0.719482,-8.61325 2.137691,-17.03825 20.179676,-24.66405 l -3.736977,-2.98958 c -11.276343,7.72043 -11.993344,6.31334 -25.785142,28.40103 -3.216785,6.45641 -6.2901,10.33036 -10.463536,34.00649 l 2.615884,30.64321 -2.615884,2.24219 c 3.162796,4.9462 4.132751,8.32609 13.826815,17.93749 15.916597,4.58138 37.20536,4.86503 57.923146,5.60546 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 2]) ?>">
                        <path class="d-part"
                            d="m 94.545521,257.25925 c 7.225279,5.60547 24.097089,11.21093 36.622379,16.8164 11.70175,-6.87732 25.53101,-12.45963 59.79163,-5.60547 15.29893,4.86719 28.54473,15.07255 38.86456,32.8854 6.89821,14.48003 10.09067,36.37157 13.07942,58.67054 l 31.01691,-1.12109 -0.37369,-16.069 c -6.43547,-0.83053 -7.73931,-2.68738 -9.34245,-4.48437 -5.25557,-30.1651 -10.10736,-60.41096 -10.46353,-91.55594 1.19388,-12.51537 1.2666,-25.40447 5.23176,-36.99608 l -50.07549,4.11068 -63.52861,7.47395 c -13.75914,11.32196 -32.17973,23.57621 -50.822889,35.87498 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 5]) ?>">
                        <path class="d-part"
                            d="m 60.912727,241.56395 c 16.823311,-10.82056 30.1823,-21.48366 68.012983,-33.2591 21.3464,-4.90123 40.80524,-9.04744 57.17575,-11.95832 12.52178,1.53671 25.00077,3.37294 38.49086,-1.86849 -0.17028,0.57236 -10.21412,12.66387 -15.6953,19.43228 -34.50039,4.49311 -70.06548,6.8568 -102.76687,14.94791 -23.158958,5.85391 -33.037582,10.82246 -41.480446,15.6953 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 11]) ?>">
                        <path class="d-part"
                            d="m 271.30454,197.46762 c 2.57756,-6.25192 4.46316,-12.41496 10.08984,-19.05858 7.09077,-4.70393 13.27507,-4.48093 19.43228,-4.11068 2.54001,2.5672 5.15171,5.0627 6.72656,8.59505 l -2.24219,19.05858 c -9.23289,0.87196 -18.56081,1.74393 -28.77472,2.61589 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 1]) ?>">
                        <path class="d-part"
                            d="m 273.54673,342.83603 c -12.84272,-3.206 -10.41983,-7.70219 -10.83724,-11.95833 -7.1149,-48.30009 -13.24741,-95.27106 -3.73698,-121.07806 l 226.83452,-18.31118 c -9.34197,35.96705 -7.62361,97.9088 -5.23177,146.8632 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 3]) ?>">
                        <path class="d-part"
                            d="m 485.80703,191.48846 c -10.84409,53.17897 -6.72664,99.41235 -5.23177,146.8632 l 99.40359,-2.61589 c 13.79213,0.0332 26.8087,-13.11814 39.61196,-29.89581 25.0406,-28.77187 53.05339,-54.57156 75.11324,-86.32418 -0.33087,-13.74351 -8.86734,-29.12814 -19.05859,-44.84372 -24.77021,4.75656 -50.46829,9.24801 -88.94005,10.08984 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 7]) ?>">
                        <path class="d-part"
                            d="m 736.55819,274.82305 89.31375,-11.58463 22.04817,-26.15884 c -24.21531,-6.65385 -75.59072,-21.21921 -80.34501,-33.2591 -10.06211,-1.16214 51.17415,-5.49221 84.45568,0.7474 l -13.07942,-19.43228 -71.74996,-18.31119 -52.69137,-4.48438 -38.86457,12.33203 c 10.57571,19.19237 19.01054,31.28457 19.05859,44.84372 -15.22743,27.12498 -38.9786,45.72622 -58.67054,68.38669 l 8.22135,5.97916 c 8.02459,-9.42426 13.85659,-18.76082 45.96481,-29.14842 14.55361,1.75667 27.17588,0.0369 46.33852,10.08984 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 10]) ?>">
                        <path class="d-part"
                            d="m 767.2014,166.82441 12.70573,-2.24219 c 12.88476,5.69422 49.57723,4.98264 74.73954,8.22135 -0.46875,23.04469 7.58846,46.08939 11.58463,69.13408 -4.62305,-12.37375 -6.00786,-22.31881 -14.20052,-37.36977 L 838.95136,185.1356 c -8.42371,-3.77979 -45.30648,-11.82844 -71.74996,-18.31119 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 8]) ?>">
                        <path class="d-part"
                            d="m 736.55819,274.82305 89.31375,-11.58463 22.04817,-26.15884 c 11.33946,4.89169 14.73499,4.81842 18.31119,4.85807 -0.11423,11.47221 7.21577,16.74089 12.70572,23.54295 2.50078,16.72877 3.3105,33.21597 -1.12109,48.9544 l 2.24218,4.11068 -10.46353,13.07942 -5.60547,6.72656 -91.92964,13.07942 c 2.31475,-14.94791 -1.89788,-29.89582 -7.47395,-44.84373 -13.15871,-22.76935 -19.40977,-23.54758 -28.02733,-31.7643 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 9]) ?>">
                        <path class="d-part"
                            d="m 636.03351,287.90247 8.22135,5.97916 c -5.18125,11.15697 -6.85512,1.26963 -15.69531,34.38019 l -1.86849,30.26951 -352.77064,0.3737 -0.37369,-16.069 207.02853,-4.48437 106.87754,-4.11068 c 20.82456,-10.04335 33.17252,-29.97606 48.58071,-46.33851 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 6]) ?>">
                        <path class="d-part"
                            d="m 714.51003,162.34003 52.69137,4.48438 4.11068,-2.98958 C 732.69665,148.44116 694.08122,131.17004 655.46579,122.35438 l 0.37369,-2.24219 -78.47651,-13.82681 c -52.9648,-1.89637 -112.78592,-13.240223 -198.43349,12.33202 -33.14503,15.97646 7.14458,-6.00207 -105.75645,51.19659 -16.21163,8.29357 -33.27272,19.98502 -48.58071,24.66405 l -15.6953,19.43228 20.92707,-2.24219 c 43.13,-27.12091 71.47606,-52.34644 150.60018,-84.08198 37.60646,-12.95475 76.5819,-12.21969 115.0989,-16.069 52.69138,3.99087 105.38275,3.75926 158.07413,22.79556 21.41549,9.45356 48.45153,19.46918 60.91273,28.02732 z">
                        </path>
                    </a>


                </svg>
            <? endif ?>
            <? if ($session['class_id'] == 3): ?>
                <svg id="svgcar" viewBox="0 0 1212 681.33331">

                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 4]) ?>">
                        <path class="d-part"
                            d="m 124.0186,489.6682 c 2.61632,-17.10021 7.16577,-47.71849 11.01084,-73.41113 10.61185,-25.7712 23.77577,-39.63273 38.3663,-46.83678 l -52.31768,-41.85414 c -13.3461,7.10982 -23.975155,10.5969 -40.857618,22.42186 l -23.916653,10.46353 -0.996528,22.42187 -6.97569,16.4427 -3.487846,3.98611 c 0.855896,16.11179 -3.164017,30.621 0.498265,43.34893 2.00043,9.74136 17.757739,15.06319 26.906234,22.42186 l 27.902766,1.99306 12.45659,13.95138 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 2]) ?>">
                        <path class="d-part"
                            d="m 173.39574,369.42029 -52.31768,-41.85414 33.38366,-19.43229 C 294.789,256.13659 299.87368,287.93936 356.75675,256.81271 l 16.94096,-9.96527 18.43576,14.44964 c -9.41809,5.84496 -16.64004,31.01596 -19.43229,95.16836 -0.59271,37.40691 4.49812,64.58344 10.46354,90.18571 l -24.41492,3.98611 c -7.36967,-23.32891 -6.37499,-40.03605 -43.84719,-87.19613 -28.98764,-11.70166 -56.91591,-14.80991 -96.16488,-6.47743 -17.95762,0.3607 -31.15529,7.068 -45.34199,12.45659 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 5]) ?>">
                        <path class="d-part"
                            d="m 154.46172,308.13386 c 5.66274,-6.12019 13.33471,-12.57526 11.46006,-17.43922 -2.7528,-6.94213 -26.31516,0.68242 -40.85761,1.99305 6.42774,-3.82002 10.56684,-7.64004 28.40102,-11.46006 35.54281,-7.23707 71.08561,-10.59861 106.62842,-15.44617 37.78125,-3.15567 63.50009,-6.31134 94.17182,-9.46701 l -38.86456,15.94443 c -30.15487,1.91103 -58.14894,4.07168 -90.68398,12.45659 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 11]) ?>">
                        <path class="d-part"
                            d="m 402.09874,257.31098 c 0.004,-10.80229 2.76826,-21.60117 15.94443,-32.38714 12.48299,-6.39055 23.04705,-7.02428 32.8854,-5.4809 0.80075,17.71202 -0.66855,30.88395 -2.49132,43.34894 1.99809,13.54372 -7.21741,10.26704 -12.45659,12.95485 -19.89474,-0.41141 -25.25748,-10.51081 -33.88192,-18.43575 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 1]) ?>">
                        <path class="d-part"
                            d="m 382.16819,279.23457 277.03457,-14.44964 c -10.63015,49.3281 -12.94951,98.65619 -4.98263,147.98429 l 3.48784,43.8472 c -84.36866,0.30215 -163.28573,4.96556 -253.61618,0.49827 -16.93665,-2.61329 -20.32162,-8.92249 -22.92012,-15.44618 -5.74078,-55.74279 -17.21932,-112.99552 0.99652,-162.43394 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 3]) ?>">
                        <path class="d-part"
                            d="m 657.70797,456.61642 158.9461,2.49132 c 54.72141,-154.0862 79.4943,-74.99417 77.72912,-104.1371 3.52013,-35.01109 3.34789,-69.09908 -8.96874,-100.15098 l -226.21169,9.96527 c -19.98443,63.94383 -4.42183,127.88766 -1.49479,191.83149 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 7]) ?>"">
                        <path class=" d-part"
                        d="m 894.38319,354.97064 c 2.7945,-31.60394 5.13893,-63.34637 -8.96874,-100.15098 32.35085,-0.83044 63.8237,-1.66088 98.65619,-2.49132 19.83096,-22.21432 41.86506,-47.18257 56.80206,-63.27948 l 52.3177,38.86456 8.4705,32.38714 c -15.7699,56.64687 -39.2338,85.90553 -59.7917,110.61452 l -23.9166,7.47395 c -17.0298,-25.46155 -38.43313,-26.14012 -59.2934,-29.89581 -22.90076,-0.7917 -44.02545,1.96872 -64.27601,6.47742 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 8]) ?>">
                        <path class="d-part"
                            d="m 1017.9526,378.38903 23.9166,-7.47395 c 16.8363,-18.23897 31.4586,-37.58492 40.3594,-59.79163 l 60.7881,-1.99306 7.9723,-2.49132 -4.9827,31.88888 c 0.5015,8.97033 10.367,22.62269 18.4358,35.37671 4.9354,12.28561 2.9988,28.69446 1.4948,44.84373 l -28.8993,48.82983 -87.6944,19.93055 -12.4566,-78.22739 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 10]) ?>">
                        <path class="d-part"
                            d="m 1059.3084,135.23639 46.3386,4.48437 c 4.3826,3.17174 5.7871,5.59897 14.9479,9.96527 l -13.9514,13.95139 -12.4566,5.97916 30.8923,49.3281 c -14.2512,2.38598 -46.3144,1.80329 -31.8888,8.96874 l -52.3177,-38.86456 z">
                        </path>
                    </a>



                    <a href="<?php echo Url::toRoute(['calc/add', 'id' => 9]) ?>2">
                        <path class="d-part"
                            d="m 816.65407,459.10774 -158.9461,-2.49132 -253.61618,0.49827 c -9.5818,-1.40296 -17.92713,-3.79509 -20.92707,-10.46354 l -24.41492,3.98611 3.98611,37.36977 c 10.67103,2.36756 21.40951,4.26293 33.38366,-2.49132 l 28.89929,-4.98263 385.65604,0.99652 h 2.98958 c -1.65761,28.19277 2.11979,-13.84817 2.98959,-22.42186 z">
                        </path>
                    </a>



                    <a href="/calc/add?id=44" uk-tooltip="<?php echo Url::toRoute(['calc/add', 'id' => 6]) ?>">
                        <path class="d-part"
                            d="m 373.69771,246.84744 18.43576,14.44964 9.96527,-11.95832 c -0.68106,-5.64365 4.61012,-12.48174 10.46353,-19.43228 0.0335,-4.81324 12.36131,-7.21583 22.92013,-9.96528 31.7714,-26.34651 66.88949,-46.55744 106.62841,-58.29684 l 127.55549,-9.96527 c 112.85718,-2.32711 226.46914,-7.67336 336.8262,0 16.8853,11.91407 30.6923,24.13596 34.3802,37.36977 l 18.4357,-53.81247 -16.9409,-3.98611 -28.8993,-17.93749 -337.82274,6.47743 -48.82983,17.93749 -88.69092,11.95832 c -22.99601,0.95488 -86.52058,37.61768 -164.427,97.16141 z">
                        </path>
                    </a>

                </svg>
            <? endif ?>
            <?= Html::img("@web/img/body{$session['class_id']}.png"); ?>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Элемент</th>
                    <th>Стоимость</th>
                    <!-- 
                    <th>Спец.стоимость</th>
                    <th>Ваша выгода</th>
                    -->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <? $sum = 0;
                if (is_array($session['elements'])):
                    foreach ($session['elements'] as $key => $el): ?>
                        <tr>
                            <?
                            $price = !$coefficient ? $elements[$el - 1]->default_price : $elements[$el - 1]->default_price * $coefficient;
                            /*$sell = (($price / 100) * $percent_sell);*/
                            $sum += $price;
                            ?>
                            <td>
                                <?= $elements[$el - 1]->name ?>
                            </td>
                            <td>
                                <?= $price ?> р.
                            </td>
                            <!-- 
                            <td>
                                <? /* echo $price - $sell ?> р.
                          </td>
                          <td>
                              <?= $sell */?> р.
                            </td>
                            -->
                            <td><a href="<?= Url::toRoute(['calc/remove', 'id' => $key]) ?>"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    <? endforeach; ?>
                <tr>
                    <td>Выбрано:
                        <?= count($session['elements']) ?>
                    </td>
                    <td>
                        <?= $sum; ?> р.
                    </td>
                    <!--
                    <td>
                        <? /* echo $sum - (($sum / 100) * $percent_sell) ?> р.
                  </td>
                  <td>
                      <?= (($sum / 100) * $percent_sell) */?> р.
                    </td>
                    -->
                    <td></td>
                </tr>
                <?
                endif;
                ?>
            </tbody>
        </table>
        <p>* Стоимость включает работы по окрасу и лакокрасочные материалы (ЛКМ) без замены деталей и ремонта.</p>
        <? if ($sum > 0): ?>
            <a href="<?= Url::toRoute(['calc/account']) ?>"><i class="far fa-edit"></i> ЗАПИСАТЬСЯ</a>
        <? endif; ?>
    </div>

</section>
<?= $this->render('//site/why'); ?>




<?
/*
$class_id;
foreach ($elements as $el):
    ?>
    <a href="<?= Url::toRoute(['calc/add', 'element_id' => $el->id]) ?>"><?= $el->name ?></a>
<?
endforeach ?>
<?
$session = Yii::$app->session;
echo " Список: ";
if ($session->has('elements')): ?>
    <?
    foreach ($session['elements'] as $key => $value):

        ?>
        <a href="<?= Url::toRoute(['calc/remove', 'session_id' => $key]) ?>"><?= $value ?>[удалить]</a>
    <?
    endforeach ?>
<?
endif; ?>

*/?>