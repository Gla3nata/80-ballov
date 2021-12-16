<?php get_header(); ?>
<main class="main">
    <div class="container">
        <div class="main__inner">
            <aside class="sidebar">
                <div class="sidebar-header">Математическая вертикаль 2022</div>
                <ul class="sidebar-list">
                    <li class="sidebar__item">
                        <a class="sidebar__link sidebar__active" href="">Приветствие</a>
                    </li>
                    <li class="sidebar__item">
                        <a class="sidebar__link" href="">Задание 1-3</a>
                        <div class="sidebar__item-score">
                            <span>0</span>
                            /20
                        </div>
                    </li>
                    <li class="sidebar__item">
                        <a class="sidebar__link" href="">Задание 4</a>
                        <div class="sidebar__item-score"><span>0</span>/14</div>
                    </li>
                    <li class="sidebar__item">
                        <a class="sidebar__link" href="">Задание 5</a>
                        <div class="sidebar__item-score"><span>0</span>/5</div>
                    </li>
                    <li class="sidebar__item">
                        <a class="sidebar__link" href="">Задание 6</a>
                        <div class="sidebar__item-score"><span>0</span>/5</div>
                    </li>
                    <li class="sidebar__item item__parent">
                        <a class="sidebar__link" href="">Задание 7</a>
                            <div class="sidebar__item-score"><span>0</span>/3</div>
                            <ul class="item__parent-list">
                                <li class="sidebar__item item__child">
                                    <a class="sidebar__link" href="">Трудные случаи
                                        <div class="icon">
                                            <img src="images/aside-lock.svg" alt="lock">
                                            <img src="images/aside-check.svg" alt="check">
                                        </div>
                                    </a>
                                </li>
                                <li class="sidebar__item item__child">
                                    <a class="sidebar__link" href="">Тестовые задания (часть 1)
                                        <div class="icon">
                                            <img src="images/aside-lock.svg" alt="lock">
                                            <img src="images/aside-check.svg" alt="check">
                                        </div>
                                    </a>
                                <li class="sidebar__item item__child">
                                    <a class="sidebar__link" href="">Тестовые задания (часть 2)
                                        <div class="icon">
                                            <img src="images/aside-lock.svg" alt="lock">
                                            <img src="images/aside-check.svg" alt="check">
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar__item">
                            <a class="sidebar__link" href="">Задание 11</a>
                            <div class="sidebar__item-score"><span>0</span>/5</span>
                        </li>
                        <li class="sidebar__item">
                            <a class="sidebar__link" href="">Задание 12</a>
                            <div class="sidebar__item-score"><span>0</span>/12</span>
                        </li>
                        <li class="sidebar__item">
                            <a class="sidebar__link" href="">Задание 13</a>
                            <div class="sidebar__item-score"><span>0</span>/9</div>
                        </li>
                        <li class="sidebar__item">
                            <a class="sidebar__link" href="">Задание 14</a>
                            <div class="sidebar__item-score"><span>0</span>/8</div>
                        </li>
                        <li class="sidebar__item">
                            <a class="sidebar__link" href="">Задание 15</a>
                            <div class="sidebar__item-score"><span>0</span>/2</div>
                        </li>
                    </ul>
                </aside>
                <section class="content">
                    <div class="breadcrumbs">
                        <a class="breadcrumbs__link" href="#">Главная /</a>
                        <a class="breadcrumbs__link" href="#">Математическая вертикаль /</a>
                        <a class="breadcrumbs__link breadcrumbs__link-active" href="#">Легендарный старт</a>
                    </div>
                    <div class="content__banner">
                        <div class="content__banner-box">
                            <h1 class="content__banner-title">“МатВертикаль” <br> подготовка к экзамену</h1>
                            <p class="content__banner-text">Курс поможет поступить в престижный класс и
                                получать пятёрки по математике</p>
                            <div class="content__banner-infoBlock infoBlock">
                                <div class="infoBlock__top">
                                    <p class="infoBlock__top-numbers coast">4990 ₽</p>
                                    <span class="infoBlock__top-value"></span>
                                    <p class="content__banner-text">стоимость <br> за весь курс</p>
                                </div>
                                <div class="infoBlock__bottom">
                                    <div class="infoBlock__bottom_wrp">
                                        <p class="infoBlock__top-numbers play">90</p>
                                        <p class="infoBlock__text">видео в курсе</p>
                                    </div>
                                    <div class="infoBlock__bottom_wrp">
                                    <p class="infoBlock__top-numbers approved">790</p>
                                    <p class="infoBlock__text">проверочных тестов</p>
                                    </div>
                                </div>
                                <div class="infoBlock__btn">
                                    <a class="button btn-buy" href="">Купить</a>
                                    <a class="button btn-try" href="">Попробовать бесплатно</a>
                                </div>
                            </div>
                        </div>
                        <div class="content__banner-photoBlock">
                            <img class="teacher" src="images/teacher.png" alt="teacher">
                            <div class="teacher__icons">
                                <div class="teacher__icons-item">
                                    <img src="images/teacher-icon-men.svg" alt="teacher-icon">
                                </div>
                                <div class="teacher-box" id="teacher-popup">
                                    <div class="teacher__box-title">Попов Михаил Сергеевич</div>
                                    <div class="teacher__box-subtitle">Образование:</div>
                                    <p class="teacher__box-text">МГУ Имени М.В. Ломоносова факультет ВМК, аспирантура ИХФ РАН Имени Семенова;</p>
                                    <p class="teacher__box-subtitle">Число учеников:
                                        <span>более 200;</span>
                                        </p>
                                    <div class="teacher__box-subtitle">Кол-во стобалльников:</div>
                                    <p class="teacher__box-text">1. (Эдуард Косолапов, выпуск 2018 года);</p>
                                    <div class="teacher__box-subtitle">Место работы:</div>
                                    <p class="teacher__box-text-blue">преподает пятый год в Московской школе №597 «Новое поколение»;</p>
                                    <div class="teacher__box-subtitle">Достижения:</div>
                                    <p class="teacher__box-text">лауреат конкурса «Учитель года Москвы - 2018»;</p>
                                    <p class="teacher__box-text">эксперт ЕГЭ по математике с 2015 года;</p>
                                    <p class="teacher__box-text">с 2020 года старший эксперт ЕГЭ по математике;</p>
                                    <p class="teacher__box-text">второй год проводит мастер-классы на главном педагогическом форуме города Москвы «Город образования»;</p>
                                    <p class="teacher__box-text">ведет рубрику «Школьная программа для взрослых» на радио «Маяк»;</p>
                                    <p class="teacher__box-text">учитель высшей категории;</p>
                                    <p class="teacher__box-text">первый разряд по шахматам;</p>
                                </div>
                                <div class="teacher__icons-item">
                                    <img src="images/teacher-icon.png" alt="teacher-icon">
                                </div>
                                <div class="teacher__icons-item">
                                    <img src="images/300.svg" alt="teacher-icon">
                                </div>
                                <div class="teacher__icons-item">
                                    <img src="images/teacher-icon-100.svg" alt="teacher-icon">
                                </div>
                                <div class="teacher__icons-item">
                                    <img src="images/hat.svg" alt="teacher-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-popup">
                        <a class="video__link" href="https://youtu.be/KCbqj3mL7yE">
                            <img src="images/popup.svg" alt="video-img">
                        </a>
                    </div>
                    <div class="content__info">
                        <h2 class="content__info-title">Кому будет полезен курс:</h2>
                        <p class="content__info-text">Если Вы хотите, чтобы Ваш ребенок обучался с лучшими преподавателями в школе, был окружен учениками, которые пришли в школу учиться, а также подготовить почву для блестящего будущего Вашего ребенка, то добро пожаловать на курс “МатВертикаль” от Михаила Попова и проекта “80 Баллов”.
                        </p>
                        <p class="content__info-slogan">Качественное математическое образование - это залог успеха на рынке труда!</p>
                        <h2 class="content__info-title">О курсе:</h2>
                        <ul class="content__info-list">
                        <li>59 видео ЕГЭ 2022 от старшего эксперта ЕГЭ и учителя высшей категории</li>
                        <li>Мы разберем абсолютно все нюансы экзамена</li>
                        <li>Каждый ученик научится решать задачи, которые 100% встретяться на экзамене</li>
                        <li>Разберем, как решать задания повышенной сложности</li>
                        <li>Все обучение посроено без использования сложных непонятных терминов и громоздких уравнений</li>
                    </ul>
                <h2 class="content__info-title">Об авторе курса:</h2>
                    <ul class="content__info-list">
                         <li>Михаил Попов - старший эксперт ЕГЭ и учитель высшей категории</li>
                        <li>Участник проекта с самого его основания</li>
                        <li>Практикующий учитель в московской школе №597</li>
                        <li>Методист в МГУ им. Ломоносова</li>
                    </ul>
                    <div class="infoBlock__btn">
                        <a class="button btn-buy" href="">Купить</a>
                        <a class="button btn-try" href="">Купить в рассрочку от 833 ₽/мес</a>
                </div>

            </div>
        </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>