<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.scss'])
    </head>
    <body>
        <header>
            <div class="container">
                <a href="/" class="logo">
                    <img src="/img/logo.png" alt="Учебный центр Армтек">
                </a>
                <nav class="main-menu">
                    <ul>
                        <li><a href="" class="active">О нас</a></li>
                        <li>
                            <a href="">Услуги</a>
                            <ul>
                                <li><a href="">Тренинги</a></li>
                                <li><a href="">Электронные курсы</a></li>
                                <li><a href="">Комплексные программы</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="" class="color-orange">
                                <svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.21184 22.8178L6.46247 23.4324L7.74784 23.9345L9.63767 24.6041L11.201 23.9345L13.0074 23.0019C24.4206 16.2678 15.4392 5.98256 13.957 4.91123C14.4758 6.05908 14.5499 7.97217 13.5123 8.89046C11.8077 2.15637 7.5834 0.855469 7.5834 0.855469C8.10218 4.29904 5.80473 8.0487 3.58139 10.8801C3.50728 9.50265 3.43316 8.58436 2.69205 7.20694C2.54383 9.73222 0.691044 11.7218 0.172264 14.2471C-0.494738 17.6907 0.691044 20.1394 5.21184 22.8178Z" fill="#FD0E0E"/>
                                    <path d="M6.6729 22.8324L7.487 23.2321L8.3237 23.5588L9.55389 23.9944L10.5715 23.5588L11.7474 22.9521C19.1768 18.5717 13.3304 11.8813 12.3655 11.1844C12.7032 11.931 12.7515 13.1755 12.0761 13.7728C10.9665 9.39236 8.21667 8.54614 8.21667 8.54614C8.55436 10.7861 7.05884 13.2253 5.61157 15.067C5.56332 14.171 5.51508 13.5737 5.03266 12.6777C4.93617 14.3204 3.73011 15.6146 3.39241 17.2573C2.95823 19.4973 3.73011 21.0901 6.6729 22.8324Z" fill="#FFE211"/>
                                </svg>
                                Акции
                            </a>
                        </li>
                        <li><a href="">Аренда</a></li>
                        <li><a href="">Подарочные сертификаты</a></li>
                    </ul>
                </nav>
                <ul class="header-tools">
                    <li><a href="">Войти</a></li>
                    <li><a href="" class="button bg-orange">Регистрация</a></li>
                    <li>
                        <a href="" class="cart">
                            <svg width="43" height="37" viewBox="0 0 43 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M31.2688 13.7936H40.25C41.2813 13.7936 42.125 14.6373 42.125 15.6686L42.0688 16.1748L37.3063 33.5561C36.8563 35.1311 35.4125 36.2936 33.6875 36.2936H9.3125C7.5875 36.2936 6.14375 35.1311 5.7125 33.5561L0.95 16.1748C0.89375 16.0061 0.875 15.8373 0.875 15.6686C0.875 14.6373 1.71875 13.7936 2.75 13.7936H11.7313L19.9438 1.5123C20.3 0.968555 20.9 0.706055 21.5 0.706055C22.1 0.706055 22.7 0.968555 23.0563 1.49355L31.2688 13.7936ZM26.75 13.7936L21.5 5.91855L16.25 13.7936H26.75ZM33.6875 32.5436L9.33125 32.5623L5.20625 17.5436H37.8125L33.6875 32.5436ZM17.75 25.0436C17.75 22.9811 19.4375 21.2936 21.5 21.2936C23.5625 21.2936 25.25 22.9811 25.25 25.0436C25.25 27.1061 23.5625 28.7936 21.5 28.7936C19.4375 28.7936 17.75 27.1061 17.75 25.0436Z" fill="#272727"/>
                            </svg>
                            <span class="number bg-orange">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <section class="main-banner position-relative">
                <div class="container">
                    <div class="main-header">
                        <h1>Учебный центр</h1>
                        <h2><img src="/img/Armtek.png" alt=""></h2>
                        <p>Эффективное обучение - ключ к <br>успеху вашего бизнеса!</p>
                    </div>
                    <div class="main-carousel position-relative">
                        <div class="main-slider owl-carousel">
                            <div>
                                <img src="/img/main/main-1.png" alt="">
                            </div>
                            <div>
                                <img src="/img/main/main-1.png" alt="">
                            </div>
                            <div>
                                <img src="/img/main/main-1.png" alt="">
                            </div>
                        </div>
                        <div class="owl-navigation" id="main-slider"></div>
                    </div>
                </div>
            </section>
            <section class="main-programms">
                <div class="container">
                    <ul class="programms-navigation orange-frame tab-navs">
                        <li><a href="#" class="tab-nav active" data-tab="programms-tab">Комплексные программы</a></li>
                        <li><a href="#" data-tab="courses-tab" class="tab-nav">Электронные курсы</a></li>
                        <li><a href="#" data-tab="trainings-tab" class="tab-nav">Тренинги</a></li>
                    </ul>
                    <div class="programms-tabs tabs">
                        <div class="programms-tab position-relative tab active" id="programms-tab">
                            <div class="block-header">
                                <h2>Комплексные программы</h2>
                                <a href="" class="button button-framed">
                                    Перейти в каталог 
                                    <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.75 16.5L9.25 9L1.75 1.5" stroke="#272727" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="complecs-programms owl-carousel">
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-1.png" alt="" />
                                        <figcaption>Легковая программа. <br>Базовый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-1.png" alt="Elephant at sunset" />
                                        <figcaption>Легковая программа. <br>Продвинутый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-2.png" alt="Elephant at sunset" />
                                        <figcaption>Грузовая программа</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-1.png" alt="" />
                                        <figcaption>Легковая программа. <br>Базовый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-1.png" alt="Elephant at sunset" />
                                        <figcaption>Легковая программа. <br>Продвинутый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-2.png" alt="Elephant at sunset" />
                                        <figcaption>Грузовая программа</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-navigation" id="complecs-programms"></div>
                        </div>
                        <div class="programms-tab position-relative tab" id="courses-tab">
                            <div class="block-header">
                                <h2>Электронные курсы</h2>
                                <a href="" class="button button-framed">
                                    Перейти в каталог 
                                    <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.75 16.5L9.25 9L1.75 1.5" stroke="#272727" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="online-courses owl-carousel">
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-3.png" alt="Elephant at sunset" />
                                        <figcaption>Устройство легкового автомобиля</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-3.png" alt="Elephant at sunset" />
                                        <figcaption>Устройство грузового автомобиля</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-4.png" alt="Elephant at sunset" />
                                        <figcaption>Подбор автозапчастей легкового автомобиля. <br>Базовый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-3.png" alt="Elephant at sunset" />
                                        <figcaption>Устройство легкового автомобиля</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-3.png" alt="Elephant at sunset" />
                                        <figcaption>Устройство грузового автомобиля</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-4.png" alt="Elephant at sunset" />
                                        <figcaption>Подбор автозапчастей легкового автомобиля. <br>Базовый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-navigation" id="online-courses"></div>
                        </div>
                        <div class="programms-tab position-relative tab" id="trainings-tab">
                            <div class="block-header">
                                <h2>Тренинги</h2>
                                <a href="" class="button button-framed">
                                    Перейти в каталог 
                                    <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.75 16.5L9.25 9L1.75 1.5" stroke="#272727" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="trainings owl-carousel">
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-5.png" alt="Elephant at sunset" />
                                        <figcaption>Подбор автозапчастей легкового автомобиля. Базовый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-5.png" alt="Elephant at sunset" />
                                        <figcaption>Пневматические системы грузового автомобиля. Устройство и подбор.</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-6.png" alt="Elephant at sunset" />
                                        <figcaption>Подбор автозапчастей легкового автомобиля. Продвинутый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-5.png" alt="Elephant at sunset" />
                                        <figcaption>Подбор автозапчастей легкового автомобиля. Базовый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-5.png" alt="Elephant at sunset" />
                                        <figcaption>Пневматические системы грузового автомобиля. Устройство и подбор.</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                                <div class="owl-slide">
                                    <figure>
                                        <img src="/img/programms/program-6.png" alt="Elephant at sunset" />
                                        <figcaption>Подбор автозапчастей легкового автомобиля. Продвинутый уровень</figcaption>
                                    </figure>
                                    <div class="slide-cover orange-frame">
                                        <h3>Легковая программа. <br>Продвинутый уровень</h3>
                                        <ul class="marked-list">
                                            <li><div>Обучение подбору автозапчастей легковой программы. <br>Уровень: <span class="color-orange">Продвинутый</span></div></li>
                                            <li>Техника продаж для продавцов розничного магазина</li>
                                            <li>Клиентоориентированность и сервис как конкурентное преимущество</li>
                                            <li>Работа с возражениями и конфликтами</li>
                                        </ul>
                                        <a href="" class="button bg-orange">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-navigation" id="trainings"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-sales">
                <div class="container display-block position-relative">
                    <div class="block-header">
                        <h2>Акции</h2>
                        <a href="" class="button button-framed">
                            Смотреть все акции 
                            <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.75 16.5L9.25 9L1.75 1.5" stroke="#272727" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="sales-slider owl-carousel">
                        <div class="sales-slide">
                            <div class="sales-block">
                                <img src="/img/sales/main.png" alt="">
                                <img src="/img/sales/sale__line.png" alt="" class="sale-strips">
                                <div class="sale-label">
                                    <h4>Скидка</h4>
                                    <span>20%</span>
                                    <p>при подключении 3х специалистов</p>
                                </div>
                            </div>
                            <div class="sales-block">
                                <h3>Вебинар подбор ЕТК</h3>
                                <ul class="marked-list">
                                    <li>Изучим товарные группы</li>
                                    <li>Научим подбору по товарным группам</li>
                                    <li>Продолжительность: <br>2 часа</li>
                                </ul>
                                <div class="price">
                                    <div class="prices">
                                        <div class="prices-list">
                                            <div class="price-new">100.00 byn</div>
                                            <div class="price-old">200.00 byn</div>
                                        </div>
                                        <button class="button-icon">
                                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0497 3.76252C24.7603 2.47251 23.0111 1.74774 21.1872 1.74774C19.3632 1.74774 17.6141 2.47251 16.3247 3.76252L14.9997 5.08752L13.6747 3.76252C10.9892 1.07704 6.63515 1.07704 3.94966 3.76252C1.26418 6.44801 1.26418 10.802 3.94966 13.4875L5.27466 14.8125L14.9997 24.5375L24.7247 14.8125L26.0497 13.4875C27.3397 12.1981 28.0644 10.4489 28.0644 8.62502C28.0644 6.8011 27.3397 5.05193 26.0497 3.76252Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="buttons">
                                        <a href="" class="button button-framed">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sales-block">
                                <h3>Вебинар пневмосистема ГА</h3>
                                <ul class="marked-list">
                                    <li>Изучим устройство пневмосистемы</li>
                                    <li>Продолжительность: 8 часов</li>
                                </ul>
                                <div class="price">
                                    <div class="prices">
                                        <div class="prices-list list-inline">
                                            <div class="price-new">150.00 byn</div>/
                                            <div class="price-old">200.00 byn</div>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a href="" class="button button-framed">Подробнее</a>
                                        <button class="button-icon">
                                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0497 3.76252C24.7603 2.47251 23.0111 1.74774 21.1872 1.74774C19.3632 1.74774 17.6141 2.47251 16.3247 3.76252L14.9997 5.08752L13.6747 3.76252C10.9892 1.07704 6.63515 1.07704 3.94966 3.76252C1.26418 6.44801 1.26418 10.802 3.94966 13.4875L5.27466 14.8125L14.9997 24.5375L24.7247 14.8125L26.0497 13.4875C27.3397 12.1981 28.0644 10.4489 28.0644 8.62502C28.0644 6.8011 27.3397 5.05193 26.0497 3.76252Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="sales-block">
                                <h3>Сокращенный курс устройство ЛА</h3>
                                <ul class="marked-list">
                                    <li>Изучим устройство ЛА</li>
                                    <li>Продолжительность: 8 часов</li>
                                </ul>
                                <div class="price">
                                    <div class="prices">
                                        <div class="prices-list list-inline">
                                            <div class="price-new">150.00 byn</div>/
                                            <div class="price-old">200.00 byn</div>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a href="" class="button button-framed">Подробнее</a>
                                        <button class="button-icon">
                                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0497 3.76252C24.7603 2.47251 23.0111 1.74774 21.1872 1.74774C19.3632 1.74774 17.6141 2.47251 16.3247 3.76252L14.9997 5.08752L13.6747 3.76252C10.9892 1.07704 6.63515 1.07704 3.94966 3.76252C1.26418 6.44801 1.26418 10.802 3.94966 13.4875L5.27466 14.8125L14.9997 24.5375L24.7247 14.8125L26.0497 13.4875C27.3397 12.1981 28.0644 10.4489 28.0644 8.62502C28.0644 6.8011 27.3397 5.05193 26.0497 3.76252Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sales-slide">
                            <div class="sales-block">
                                <img src="/img/sales/main.png" alt="">
                                <div class="sale-label">
                                    <h4>Скидка</h4>
                                    до <span>20%</span>
                                    <p>при подключении 3х специалистов</p>
                                </div>
                            </div>
                            <div class="sales-block">
                                <h3>Вебинар подбор ЕТК</h3>
                                <ul class="marked-list">
                                    <li>Изучим товарные группы</li>
                                    <li>Научим подбору по товарным группам</li>
                                    <li>Продолжительность: <br>2 часа</li>
                                </ul>
                                <div class="price">
                                    <div class="prices">
                                        <div class="prices-list">
                                            <div class="price-new">100.00 byn</div>
                                            <div class="price-old">200.00 byn</div>
                                        </div>
                                        <button class="button-icon">
                                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0497 3.76252C24.7603 2.47251 23.0111 1.74774 21.1872 1.74774C19.3632 1.74774 17.6141 2.47251 16.3247 3.76252L14.9997 5.08752L13.6747 3.76252C10.9892 1.07704 6.63515 1.07704 3.94966 3.76252C1.26418 6.44801 1.26418 10.802 3.94966 13.4875L5.27466 14.8125L14.9997 24.5375L24.7247 14.8125L26.0497 13.4875C27.3397 12.1981 28.0644 10.4489 28.0644 8.62502C28.0644 6.8011 27.3397 5.05193 26.0497 3.76252Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="buttons">
                                        <a href="" class="button button-framed">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sales-block">
                                <h3>Вебинар пневмосистема ГА</h3>
                                <ul class="marked-list">
                                    <li>Изучим устройство пневмосистемы</li>
                                    <li>Продолжительность: 8 часов</li>
                                </ul>
                                <div class="price">
                                    <div class="prices">
                                        <div class="prices-list list-inline">
                                            <div class="price-new">150.00 byn</div>/
                                            <div class="price-old">200.00 byn</div>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a href="" class="button button-framed">Подробнее</a>
                                        <button class="button-icon">
                                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0497 3.76252C24.7603 2.47251 23.0111 1.74774 21.1872 1.74774C19.3632 1.74774 17.6141 2.47251 16.3247 3.76252L14.9997 5.08752L13.6747 3.76252C10.9892 1.07704 6.63515 1.07704 3.94966 3.76252C1.26418 6.44801 1.26418 10.802 3.94966 13.4875L5.27466 14.8125L14.9997 24.5375L24.7247 14.8125L26.0497 13.4875C27.3397 12.1981 28.0644 10.4489 28.0644 8.62502C28.0644 6.8011 27.3397 5.05193 26.0497 3.76252Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="sales-block">
                                <h3>Сокращенный курс устройство ЛА</h3>
                                <ul class="marked-list">
                                    <li>Изучим устройство ЛА</li>
                                    <li>Продолжительность: 8 часов</li>
                                </ul>
                                <div class="price">
                                    <div class="prices">
                                        <div class="prices-list list-inline">
                                            <div class="price-new">150.00 byn</div>/
                                            <div class="price-old">200.00 byn</div>
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <a href="" class="button button-framed">Подробнее</a>
                                        <button class="button-icon">
                                            <svg width="30" height="26" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.0497 3.76252C24.7603 2.47251 23.0111 1.74774 21.1872 1.74774C19.3632 1.74774 17.6141 2.47251 16.3247 3.76252L14.9997 5.08752L13.6747 3.76252C10.9892 1.07704 6.63515 1.07704 3.94966 3.76252C1.26418 6.44801 1.26418 10.802 3.94966 13.4875L5.27466 14.8125L14.9997 24.5375L24.7247 14.8125L26.0497 13.4875C27.3397 12.1981 28.0644 10.4489 28.0644 8.62502C28.0644 6.8011 27.3397 5.05193 26.0497 3.76252Z" stroke="#272727" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation" id="sales-slider"></div>
                </div>
            </section>
            <section class="popular-courses">
                <div class="container">
                    <div class="block-header">
                        <h2>Популярные курсы</h2>
                        <a href="" class="button button-framed">
                            Перейти в каталог 
                            <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.75 16.5L9.25 9L1.75 1.5" stroke="#272727" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="main-courses position-relative">
                        <h3>Курсы</h3>
                        <p>Это обучающие программы, доступные в цифровом онлайн-формате. Они включают в себя мультимедийные уроки, интерактивные задания, тесты и другие учебные материалы, которые можно проходить в любое удобное время на персональном компьютере или мобильном устройстве. Электронные курсы предоставляют гибкий и персонализированный подход к обучению, позволяя учиться в своем темпе и получать оперативную обратную связь по мере прохождения материала.</p>
                        <div class="main-courses-slider owl-carousel">
                            <div class="owl-slide">
                                <figure>
                                    <img src="/img/courses/course-1.png" alt="Elephant at sunset" />
                                    <figcaption>Подбор автозапчастей легкового автомобиля. Базовый уровень</figcaption>
                                </figure>
                                <a href=""></a>
                            </div>
                            <div class="owl-slide">
                                <figure>
                                    <img src="/img/courses/course-2.png" alt="Elephant at sunset" />
                                    <figcaption>Подбор автозапчастей грузового автомобиля</figcaption>
                                </figure>
                                <a href=""></a>
                            </div>
                            <div class="owl-slide">
                                <figure>
                                    <img src="/img/courses/course-3.png" alt="Elephant at sunset" />
                                    <figcaption>Подбор в TecDoc</figcaption>
                                </figure>
                                <a href=""></a>
                            </div>
                            <div class="owl-slide">
                                <figure>
                                    <img src="/img/courses/course-1.png" alt="Elephant at sunset" />
                                    <figcaption>Подбор автозапчастей легкового автомобиля. Базовый уровень</figcaption>
                                </figure>
                                <a href=""></a>
                            </div>
                            <div class="owl-slide">
                                <figure>
                                    <img src="/img/courses/course-2.png" alt="Elephant at sunset" />
                                    <figcaption>Подбор автозапчастей грузового автомобиля</figcaption>
                                </figure>
                                <a href=""></a>
                            </div>
                            <div class="owl-slide">
                                <figure>
                                    <img src="/img/courses/course-3.png" alt="Elephant at sunset" />
                                    <figcaption>Подбор в TecDoc</figcaption>
                                </figure>
                                <a href=""></a>
                            </div>
                        </div>
                        <div class="owl-navigation" id="courses-navigation"></div>
                    </div>
                </div>
            </section>
            <div class="container">
                <form action="" class="subscribe-form orange-frame">
                    <h3>Не спешите уходить!</h3>
                    <p>Подпишитесь на новостную, информационную и рекламную <br>рассылку учебного центра <span class="color-orange">ARM</span>TEK</p>
                    <div class="form-rows">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Имя и фамилия*" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Телефон*" name="phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email*" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="button bg-orange">Отправить</button>
                            <div class="checkbox">
                                <input type="checkbox" name="agreement" value="1" class="error">
                                <label>Отправляя заявку, Вы принимаете условия <a href="">Договора публичной оферты</a> и даете согласие на обработку своих персональных данных в соответствии с <a href="">Политикой обработки персональных данных</a></label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <div class="container position-relative">
                <button class="scroll-up">
                    <svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.5448 19.6841L19.6764 3.22837L36.0439 19.4468" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="common-info">
                    <a href="" class="logo">
                        <img src="/img/logo-light.png" alt="">
                    </a>
                    <p>Общество с ограниченной ответственностью “Еврозапчасть”</p>
                    <p>ООО “Еврозапчасть”</p>
                    <p>р/с (BYN): BY41 ALFA 3012 2009 8401 5027 0000</p>
                    <p>в ЗАО «Альфа-Банк» код: ALFABY2X</p>
                    <p>220114 г.Минск, ул.П. Мстиславца, 9</p>
                    <p>УНП 190063577</p>
                    <p>регистрация Минским облисполкомом</p>
                    <p>27.01.2000г.</p>
                </div>
                <nav class="footer-menu">
                    <ul>
                        <li><a href="">Акции</a></li>
                        <li><a href="">Курсы</a></li>
                        <li><a href="">Тренинги</a></li>
                        <li><a href="">Контакты</a></li>
                        <li><a href="">Оплата</a></li>
                        <li><a href="">Аренда</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Клиенту</a></li>
                        <li><a href="">Политика <br>обработки ПД</a></li>
                        <li><a href="">Обработка <br>файлов cookie</a></li>
                        <li><a href="">Договор публичной <br>оферты</a></li>
                    </ul>
                </nav>
                <div class="footer-contacts">
                    <div class="footer-contact">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 5.02944 7.02944 1 12 1C16.9706 1 21 5.02944 21 10V10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <address>
                            УЦ Армтек<br>
                            Минск, ул. Ольшевского, д. 22
                        </address>
                    </div>
                    <div class="footer-contact">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 5.02944 7.02944 1 12 1C16.9706 1 21 5.02944 21 10V10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <address>
                            223053, Боровлянский с/с, д. <br>81-4, ком. 316, район д. Дроздово, Минская обл., Минский р-н <br>Республика Беларусь
                        </address>
                    </div>
                    <div class="footer-contact">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0004 16.92V19.92C21.0027 20.4831 20.7675 21.0211 20.3525 21.4018C19.9375 21.7825 19.3813 21.9707 18.8204 21.92C15.7433 21.5856 12.7874 20.5341 10.1904 18.85C7.77426 17.3146 5.72576 15.2661 4.19043 12.85C2.50041 10.2412 1.44867 7.27097 1.12043 4.17998C1.0699 3.62085 1.2567 3.06623 1.63519 2.6516C2.01369 2.23697 2.54902 2.0005 3.11043 1.99998H6.11043C7.11429 1.9901 7.96993 2.72594 8.11043 3.71998C8.23705 4.68004 8.47188 5.6227 8.81043 6.52998C9.08516 7.26085 8.90944 8.08478 8.36043 8.63998L7.09043 9.90998C8.51398 12.4135 10.5869 14.4864 13.0904 15.91L14.3604 14.64C14.9156 14.091 15.7396 13.9152 16.4704 14.19C17.3777 14.5285 18.3204 14.7634 19.2804 14.89C20.286 15.0318 21.0256 15.9048 21.0004 16.92Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <address>
                            7600, 375 (29) 130 5 233
                        </address>
                    </div>
                    <div class="footer-socials">
                        <ul>
                            <li><a href=""><img src="/img/icons/socials/instagram.svg" alt=""></a></li>
                            <li><a href=""><img src="/img/icons/socials/telegram.svg" alt=""></a></li>
                            <li><a href=""><img src="/img/icons/socials/viber.svg" alt=""></a></li>
                            <li><a href=""><img src="/img/icons/socials/email.svg" alt=""></a></li>
                            <li><a href=""><img src="/img/icons/socials/whatsapp.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="payments">
                    <li><img src="/img/icons/payments/mastercard.png" alt=""></li>
                    <li><img src="/img/icons/payments/maestro.png" alt=""></li>
                    <li><img src="/img/icons/payments/visa.png" alt=""></li>
                    <li><img src="/img/icons/payments/belkard.png" alt=""></li>
                    <li><img src="/img/icons/payments/alfa.png" alt=""></li>
                    <li><img src="/img/icons/payments/apple.png" alt=""></li>
                    <li><img src="/img/icons/payments/samsung.png" alt=""></li>
                </ul>
            </div>
        </footer>
        <div class="cookies">
            <p>Мы используем <a href="">cookies</a>, чтобы сохранять ваш поиск, рекомендовать полезное и создавать другие удобства на сайте</p>
            <button id="close-cookies">Окей</button>
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>