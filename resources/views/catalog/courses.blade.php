<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <x-page-banner :title="$title" :image="$image"></x-page-banner>
    <div class="container display-block">
        <div class="filter">
            <button class="filter-selector">Фильтр</button>
            <div class="filter-buttons">
                <button class="filter-button active">Грузовая программа</button>
                <button class="filter-button">Легковая программа</button>
                <button class="filter-button">Руководителям</button>
                <button class="filter-button">Продавцам</button>
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
                    <div class="card-price">
                        <span>Стоимость</span>
                        <span class="price">200.00 Byn</span>
                    </div>
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
                        <a href="javascript:void(0)" class="button cart">В корзину</a>
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
                    <div class="card-price">
                        <span>Стоимость</span>
                        <span class="price">200.00 Byn</span>
                    </div>
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
                        <a href="javascript:void(0)" class="button cart">В корзину</a>
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
                    <div class="card-price">
                        <span>Стоимость</span>
                        <span class="price">200.00 Byn</span>
                    </div>
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
                        <a href="javascript:void(0)" class="button cart">В корзину</a>
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
                    <img src="/img/cards/card-4.png" alt="">
                    <div class="card-price">
                        <span>Стоимость</span>
                        <span class="price">200.00 Byn</span>
                    </div>
                </div>
                <div class="card-description">
                    <div class="card-title">Пневматические системы грузового автомобиля</div>
                    <div class="card-content">
                        <ul class="marked-list">
                            <li>В курсе вы подробно изучите пневмосистемы грузовых автомобилей их особенности и различия</li>
                            <li>Доступ к курсу: 3 месяца</li>
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <a href="/courses/single" class="button details">Подробнее</a>
                        <a href="javascript:void(0)" class="button cart">В корзину</a>
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
                    <img src="/img/cards/card-5.png" alt="">
                    <div class="card-price">
                        <span>Стоимость</span>
                        <span class="price">200.00 Byn</span>
                    </div>
                </div>
                <div class="card-description">
                    <div class="card-title">Этапы продаж по телефону</div>
                    <div class="card-content">
                        <ul class="marked-list">
                            <li>В курсе вы изучите полный цикл взаимодействия с клиентом при телефонной продаже</li>
                            <li>Доступ к курсу: 3 месяца</li>
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <a href="/courses/single" class="button details">Подробнее</a>
                        <a href="javascript:void(0)" class="button cart">В корзину</a>
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
                    <img src="/img/cards/card-6.png" alt="">
                    <div class="card-price">
                        <span>Стоимость</span>
                        <span class="price">200.00 Byn</span>
                    </div>
                </div>
                <div class="card-description">
                    <div class="card-title">Техника продаж для продавцов розничного магазина</div>
                    <div class="card-content">
                        <ul class="marked-list">
                            <li>В курсе вы изучите основные этапы продаж в ключающие в себя класическую пятишаговую модель</li>
                            <li>Доступ к курсу: 3 месяца</li>
                        </ul>
                    </div>
                    <div class="card-buttons">
                        <a href="/courses/single" class="button details">Подробнее</a>
                        <a href="javascript:void(0)" class="button cart">В корзину</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards-load">
             <button class="show-more">Показать еще</button>
        </div>
        <div class="contact-form">
            <form action="" class="common-form">
                <h3 class="form-header">Не нашли,  что искали? Напишите нам, мы поможем!</h3>
                <div class="form-row">
                    <div class="form-groups">
                        <input type="text" class="form-control" placeholder="Имя*" name="name" required>
                        <input type="text" class="form-control" placeholder="Телефон*" name="phone" required>
                        <input type="email" class="form-control" placeholder="Email*" name="email" required>
                    </div>
                    <div class="form-groups">
                        <textarea name="comment" id="" placeholder="Комментарий" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <button type="button" class="button bg-orange">Отправить</button>
                    <div class="checkbox">
                        <input type="checkbox" name="agreement" value="1" required>
                        <label>Отправляя заявку, Вы принимаете условия <a href="">Договора публичной оферты</a> и даете согласие на обработку своих персональных данных в соответствии с <a href="">Политикой обработки персональных данных</a></label>
                     </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>