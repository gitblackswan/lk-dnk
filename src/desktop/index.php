<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- <script src="http://localhost:1342/livereload.js"></script> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1200">
        <title>ДНК</title>
        <!-- <link type="image/x-icon" href="favicon.ico" rel="shortcut icon"> -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400i,600i|PT+Sans+Caption:400,700|Roboto+Slab:700&amp;subset=cyrillic" rel="stylesheet">
        <script>
            if (screen.width <= 750) {
                document.location = "../mobile/" + document.location.search;
            }
        </script>
        <style>
            <?php include('css/head.css');
            ?>
        </style>
        <link type="text/css" href="css/libs.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/media.css" rel="stylesheet">
        <link type="text/css" href="css/scripts.css" rel="stylesheet">
        <?php include('../track/head.php'); ?>
    </head>
    <body>
        <div id="maket"></div>
        <div class="header">
            <div>
                <a class="btn_menu_open" href="#"></a>
                <a class="logo" href="#"></a>
                <p>Личный кабинет</p>
                <a class="support" href="#">Написать в <br>поддержку</a>
            </div>
        </div>
        <section class="main">
            <div>
                <h1>Все, что нужно тебе для бизнеса в одном экране</h1>
                <div class="block">
                    <a href="#" class="biz control"><span>Управление <br>сайтами</span></a>
                    <a href="#" class="biz crm active"><span>CRM <br>система</span></a>
                    <a href="#" class="biz setting"><span>Настройка <br>трафика</span></a>
                </div>
                <p>Простые инструменты для эффективного бизнеса</p>
            </div>
        </section>
        <section class="control">
            <div>
                <h2>Управление сайтами</h2>
                <div class="project_gr">
                    <div class="project">
                        <div class="block">
                            <a href="#" class="url">shavermauashota-pobratski.dnk.bz</a>
                        </div>
                        <div class="block">
                            <a href="#" class="act">Опубликован</a>
                        </div>
                        <div class="like_gr">
                            <div class="like">
                                <p>44</p>
                                <span>Посещений</span>
                            </div>
                            <div class="like">
                                <p>12</p>
                                <span>заказов</span>
                            </div>
                            <div class="like">
                                <p>35%</p>
                                <span>конверсия</span>
                            </div>
                        </div>
                        <div class="block">
                            <a href="#" class="edit">Редактировать</a>
                        </div>
                        <div class="block">
                            <a href="#" class="look">Посмотреть</a>
                        </div>
                    </div>
                    <div class="project">
                        <div class="block">
                            <a href="#" class="url">shavermauashota-pobratski.dnk.bz</a>
                        </div>
                        <div class="block">
                            <a href="#" class="state">Опубликовать</a>
                        </div>
                        <div class="like_gr">
                            <div class="like">
                                <p>0</p>
                                <span>Посещений</span>
                            </div>
                            <div class="like">
                                <p>0</p>
                                <span>заказов</span>
                            </div>
                            <div class="like">
                                <p>0</p>
                                <span>конверсия</span>
                            </div>
                        </div>
                        <a href="#" class="edit">Редактировать</a>
                        <a href="#" class="look">Посмотреть</a>
                    </div>
                    <div class="project new">
                       <div class="block">
                           <img src="img/plus.png" alt="" width="67" height="66">
                       </div>
                       <div class="block">
                           <p>создать сайт</p>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu_block">
            <div>
                <div class="menu">
                    <div class="close"></div>
                    <div class="menu_line">
                        <a href="#" class="menu_a open">Рабочий стол</a>
                        <a href="#" class="menu_a open">DNK Atom</a>
                        <a href="#" class="menu_a active open">Сайты</a>
                        <a href="#" class="menu_a open">CRM</a>
                        <a href="#" class="menu_a open">Услуги</a>
                        <a href="#" class="menu_a open">Новости</a>
                        <a href="#" class="menu_a open">Оплата</a>
                        <a href="#" class="menu_a">Продажи</a>
                        <a href="#" class="menu_a">Логистика</a>
                        <a href="#" class="menu_a">Трафик</a>
                        <a href="#" class="menu_a">Делегирование</a>
                        <a href="#" class="menu_a">Аналитика</a>
                        <a href="#" class="menu_a">Коммуникации</a>
                        <a href="#" class="menu_a">Интеграции</a>
                        <a href="#" class="menu_a">Управленческий учет</a>
                    </div>
                    <div class="menu_open">
                        <a href="" class="menu_op">Одноэкранник</a>
                        <a href="" class="menu_op active">CRM Light</a>
                        <a href="" class="menu_op">Яндекс за 1 час</a>
                    </div>
                </div>
            </div>
        </section>
        <!--script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="js/init.js"></script-->
        <?php include('../track/body.php'); ?>
    </body>
</html>