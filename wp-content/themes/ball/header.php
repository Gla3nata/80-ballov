<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <? wp_head(); ?>
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css"> -->
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__inner-left">
                    <nav class="hamburger-menu">
                        <input id="menu__toggle" type="checkbox" />
                        <label class="menu__btn" for="menu__toggle">
                            <span></span>
                        </label>
                        <ul class="menu__box">
                            <li class="menu__item">
                                <a class="menu__link" href="">Курсы ЕГЭ</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="">Курсы ОГЭ</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="">Школьникам</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="">Преподавателям</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="">Годограф</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="header__logo">
                        <a href="#">
                            <img src="images/logo.svg" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="dropdown">
                <div class="dropdown__title">new Приветствие</div>
                    <div class="dropdown__list">
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

                    </div>
                    </div>
                <div class="header__inner-profile">
                    <div class="profile">
                        <div class="profile__info">
                            <div class="profile__info--subject">Русский язык ЕГЭ</div>
                            <div class="profile__info--progress">
                                <div class="progress-box">
                                    <div class="progress-box__current">
                                    </div>
                                </div>
                                <span class="progress-box__start">0</span>
                                <span class="progress-box__value">47</span>
                                <span class="progress-box__end">100</span>
                            </div>
                        </div>
                        <div class="profile__user">
                            <img src="images/user-ava.png" alt="user-ava">
                            <div class="profile__user-class">К</div>
                            <div class="profile__user-score">1</div>
                        </div>
                    </div>
                    <button class="header__btn">
                        Рейтинг
                    </button>
                    <button class="header__btn">
                        Оплатить
                    </button>
                </div>
            </div>
        </div>
    </header>