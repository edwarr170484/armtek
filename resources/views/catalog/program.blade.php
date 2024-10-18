<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block training-page">
        <x-page-banner :title="$title" :image="$image"></x-page-banner>
        <div class="training-page product-inner">
            <div class="product-info">
                <div class="page-text">
                    <p>Правильный подбор автозапчастей является ключевым фактором для успешной работы любого специалиста в автомобильном бизнесе. Наше обучение поможет вам глубоко изучить товарные группы и освоить эффективные методики подбора необходимых деталей</p>
                </div>
            </div>
            <div class="product-form">
                <form method="POST" action="{{ route('register') }}" class="common-form auth-form">
                    <h3 class="form-header">Записаться и получить <br>бесплатную консультацию</h3>
                    <div class="form-rows">
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Имя и фамилия*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="text" name="phone" placeholder="Телефон*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="checkbox">
                                <input type="checkbox" name="agreement" value="1" required>
                                <label>Отправляя заявку Вы принимаете условия <a href="">Договора публичной оферты</a> и даете согласие на обработку своих персональных данных в соответствии с <a href="">Политикой обработки персональных данных</a></label>
                            </div>
                        </div>
                        <div class="form-row">
                            @csrf
                            <button type="button" class="button bg-orange">Записаться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="product-details cards">
            <div class="trainig-card">
                <img src="/img/cards/card-1.png" alt="">
                <div class="card">
                    <button class="card-like">
                        <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4167 6.57512C41.2677 4.4316 38.3524 3.22729 35.3125 3.22729C32.2726 3.22729 29.3573 4.4316 27.2083 6.57512L25 8.77678L22.7917 6.57512C18.3159 2.11283 11.0591 2.11283 6.58333 6.57512C2.10753 11.0374 2.10753 18.2722 6.58333 22.7345L8.79167 24.9361L25 41.0955L41.2083 24.9361L43.4167 22.7345C45.5667 20.592 46.7746 17.6855 46.7746 14.6548C46.7746 11.6241 45.5667 8.71764 43.4167 6.57512Z" stroke="#272727" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="card-image">
                        <div class="card-textpane">
                            Обучим специалистов подбору автозапчастей легкового автомобиля с "нуля". Правильный подбор автозапчастей является ключевым фактором для успешной работы специалиста
                        </div>
                    </div>
                    <div class="card-description">
                        <div class="card-title">Подбор автозапчастей легкового автомобиля. Базовый уровень</div>
                        <div class="card-content">
                            <ul class="marked-list">
                                <li>Изучим товарные группы</li>
                                <li>Научим подбору по товарным группам</li>
                                <li>Продолжительность: 8 часов</li>
                            </ul>
                        </div>
                        <div class="card-bottom">
                            <div class="card-buttons">
                                <a href="/trainings/trading" class="button details">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="trainig-card">
                <img src="/img/cards/card-2.png" alt="">
                <div class="card">
                    <button class="card-like">
                        <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4167 6.57512C41.2677 4.4316 38.3524 3.22729 35.3125 3.22729C32.2726 3.22729 29.3573 4.4316 27.2083 6.57512L25 8.77678L22.7917 6.57512C18.3159 2.11283 11.0591 2.11283 6.58333 6.57512C2.10753 11.0374 2.10753 18.2722 6.58333 22.7345L8.79167 24.9361L25 41.0955L41.2083 24.9361L43.4167 22.7345C45.5667 20.592 46.7746 17.6855 46.7746 14.6548C46.7746 11.6241 45.5667 8.71764 43.4167 6.57512Z" stroke="#272727" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <div class="card-image">
                        <div class="card-textpane">
                            Обучение подбору автозапчастей для опытных специалистов. Владение навыками работы с оригинальными каталогами повышает уровень экспертности специалиста
                        </div>
                    </div>
                    <div class="card-description">
                        <div class="card-title">Подбор автозапчастей легкового автомобиля. Продвинутый уровень</div>
                        <div class="card-content">
                            <ul class="marked-list">
                                <li>Научим подбору автозапчастей в оригинальных каталогах</li>
                                <li>Изучим фишки профессионального подбора</li>
                                <li>Продолжительность: 8 часов</li>
                            </ul>
                        </div>
                        <div class="card-bottom">
                            <div class="card-buttons">
                                <a href="/trainings/trading" class="button details">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cources-cards cards">
            <div class="card">
                <button class="card-like">
                    <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4167 6.57512C41.2677 4.4316 38.3524 3.22729 35.3125 3.22729C32.2726 3.22729 29.3573 4.4316 27.2083 6.57512L25 8.77678L22.7917 6.57512C18.3159 2.11283 11.0591 2.11283 6.58333 6.57512C2.10753 11.0374 2.10753 18.2722 6.58333 22.7345L8.79167 24.9361L25 41.0955L41.2083 24.9361L43.4167 22.7345C45.5667 20.592 46.7746 17.6855 46.7746 14.6548C46.7746 11.6241 45.5667 8.71764 43.4167 6.57512Z" stroke="#272727" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="card-image">
                    <img src="/img/cards/card-1.png" alt="">
                </div>
                <div class="card-description">
                    <div class="card-title">Устройство легкового автомобиля</div>
                    <div class="card-content">
                        <ul class="marked-list">
                            <li>В курсе вы изучите устройство легкового автомобиля, включающее в себя узлы и агрегаты начиная двигателем заканчивая электрооборудованием</li>
                            <li>В курс включены тесты для контроля знаний по изученным блокам</li>
                            <li>Доступ к курсу: 3 месяца</li>
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <a href="/courses/single" class="button details">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <button class="card-like">
                    <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4167 6.57512C41.2677 4.4316 38.3524 3.22729 35.3125 3.22729C32.2726 3.22729 29.3573 4.4316 27.2083 6.57512L25 8.77678L22.7917 6.57512C18.3159 2.11283 11.0591 2.11283 6.58333 6.57512C2.10753 11.0374 2.10753 18.2722 6.58333 22.7345L8.79167 24.9361L25 41.0955L41.2083 24.9361L43.4167 22.7345C45.5667 20.592 46.7746 17.6855 46.7746 14.6548C46.7746 11.6241 45.5667 8.71764 43.4167 6.57512Z" stroke="#272727" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="card-image">
                    <img src="/img/cards/card-2.png" alt="">
                </div>
                <div class="card-description">
                    <div class="card-title">Устройство грузового автомобиля</div>
                    <div class="card-content">
                        <ul class="marked-list">
                            <li>В курсе вы изучите устройство грузового автомобиля, включающее в себя узлы и агрегаты</li>
                            <li>В курс включены тесты для контроля знаний по изученным блокам</li>
                            <li>Доступ к курсу: 3 месяца</li>
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <a href="/courses/single" class="button details">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <button class="card-like">
                    <svg width="50" height="44" viewBox="0 0 50 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.4167 6.57512C41.2677 4.4316 38.3524 3.22729 35.3125 3.22729C32.2726 3.22729 29.3573 4.4316 27.2083 6.57512L25 8.77678L22.7917 6.57512C18.3159 2.11283 11.0591 2.11283 6.58333 6.57512C2.10753 11.0374 2.10753 18.2722 6.58333 22.7345L8.79167 24.9361L25 41.0955L41.2083 24.9361L43.4167 22.7345C45.5667 20.592 46.7746 17.6855 46.7746 14.6548C46.7746 11.6241 45.5667 8.71764 43.4167 6.57512Z" stroke="#272727" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="card-image">
                    <img src="/img/cards/card-3.png" alt="">
                </div>
                <div class="card-description">
                    <div class="card-title">Подбор автозапчастей легкового автомобиля. Базовый уровень</div>
                    <div class="card-content">
                        <ul class="marked-list">
                            <li>В курсе вы изучите способы индентификации автомобиля. Ресурсы для пыстрого и качественного подбора автозапчастей и основные товарные группы пользующиеся спросом у клиентов автобизнеса</li>
                            <li>Доступ к курсу: 3 месяца</li>
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <a href="/courses/single" class="button details">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="card empty">
                <div class="card-description">
                    <div class="card-title">Добавь курс к программе со скидкой</div>
                    <div class="card-buttons">
                        <a href="javascript:void(0)" class="button cart">Перейти в каталог 
                            <svg width="11" height="18" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.75 16.5L9.25 9L1.75 1.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-same pade-text">
            <h3>Программы, которые могут вас заинтересовать</h3>
            <div class="product-same-slider owl-carousel">
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-1.png" alt="Elephant at sunset" />
                        <figcaption>Легковая программа. Продвинутый уровень</figcaption>
                    </figure>
                    <a href=""></a>
                </div>
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-2.png" alt="Elephant at sunset" />
                        <figcaption>Грузовая программа</figcaption>
                    </figure>
                    <a href=""></a>
                </div>
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-3.png" alt="Elephant at sunset" />
                        <figcaption>Эффективный руководитель магазина</figcaption>
                    </figure>
                    <a href=""></a>
                </div>
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-1.png" alt="Elephant at sunset" />
                        <figcaption>Легковая программа. Продвинутый уровень</figcaption>
                    </figure>
                    <a href=""></a>
                </div>
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-2.png" alt="Elephant at sunset" />
                        <figcaption>Грузовая программа</figcaption>
                    </figure>
                    <a href=""></a>
                </div>
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-3.png" alt="Elephant at sunset" />
                        <figcaption>Эффективный руководитель магазина</figcaption>
                    </figure>
                    <a href=""></a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>