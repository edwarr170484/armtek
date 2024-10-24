<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block rent-section">
        <x-page-header :class="'page-header'">{{ $title }}</x-page-header>
        <div class="rent-gallery">
            <div class="rent-slider owl-carousel">
                <div class="rent-slide">
                    <img src="/img/rent/rent-1.jpg" alt="">
                </div>
                <div class="rent-slide">
                    <img src="/img/rent/rent-2.jpg" alt="">
                </div>
                <div class="rent-slide">
                    <img src="/img/rent/rent-3.jpg" alt="">
                </div>
                <div class="rent-slide">
                    <img src="/img/rent/rent-4.jpg" alt="">
                </div>
                <div class="rent-slide">
                    <img src="/img/rent/rent-5.jpg" alt="">
                </div>
            </div>
            <div class="position-relative">
                <div class="owl-navigation" id="rent-slider"></div>
            </div>
        </div>
        <div class="rent-info">
            <div class="rent-pane page-text">
                <p>Конференц-зал площадью 87,8 кв.м., расположен всего в 10 минутах от ст.м. «Пушкинская». Оформлен в современном стиле с преобладанием белых и кофейных оттенков. Высокие потолки, на окнах – рольшторы.</p>
                <p>Зал имеет две зоны: одну — для проведения деловых мероприятий, другую — для организации кофе-пауз.</p>
                <p>Зал рассчитан на размещение разных по количеству участников групп в зависимости от формата мероприятия и рассадки.</p>
                <p>Дополнительно: Розетки по всему периметру помещения, Кулер с водой,стаканчики, кофемашина, термопот.</p>
            </div>
            <div class="rent-pane page-text">
                <div class="rent-cards cards">
                    <div class="card">
                        <img src="/img/rent/plans/plan-1.jpg" alt="">
                    </div>
                    <div class="card">
                        <img src="/img/rent/plans/plan-2.jpg" alt="">
                    </div>
                    <div class="card">
                        <img src="/img/rent/plans/plan-3.jpg" alt="">
                    </div>
                    <div class="card">
                        <img src="/img/rent/plans/plan-4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="rent-info">
            <div class="rent-pane page-text">
                <h3>Клиентам нашего конференц-зала предоставляется:</h3>
                <ul class="marked-list">
                    <li>Проекционный экран</li>
                    <li>Мультимедийный проектор</li>
                    <li>Флип-чарт</li>
                    <li>Звуковая система</li>
                    <li>Компьютер</li>
                    <li>USB-презентатор</li>
                    <li>Несколько розеток и удлинителей</li>
                    <li>Wi-Fi</li>
                </ul>
            </div>
            <div class="rent-pane page-text">
                <h3>Прайс лист:</h3>
                <div class="rent-cards cards">
                    <div class="card text-card">
                        <p>Стоимость аренды конференц-зала в будние дни:</p>
                        <span>32 BYN/час</span>
                    </div>
                    <div class="card text-card">
                        <p>Стоимость аренды конференц-зала в выходные дни:</p>
                        <span>39 BYN/час</span>
                    </div>
                </div>
                <p>При долгосрочной аренде помещения (более чем на 9 часов) предоставляется приятная скидка</p>
            </div>
        </div>
        <div class="rent-info">
            <div class="rent-pane page-text">
                <h3>В зоне отдыха находятся:</h3>
                <ul class="marked-list">
                    <li>Термопот</li>
                    <li>Кулер с водой</li>
                </ul>
            </div>
            <div class="rent-pane page-text">
                <h3>Будем рады ответить на интересующие Вас вопросы</h3>
                <ul class="rent-contact">
                    <li>
                        <a href="tel:+375291305233">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M35 26.2V31.2C35.0038 32.1386 34.6118 33.0353 33.9202 33.6698C33.2285 34.3043 32.3015 34.6178 31.3667 34.5334C26.2381 33.9761 21.3117 32.2236 16.9834 29.4167C12.9564 26.8578 9.54225 23.4436 6.98336 19.4167C4.16665 15.0687 2.41376 10.1183 1.86669 4.96669C1.78248 4.03481 2.09381 3.11044 2.72463 2.41939C3.35546 1.72834 4.24768 1.33424 5.18336 1.33335H10.1834C11.8565 1.31689 13.2825 2.5433 13.5167 4.20002C13.7277 5.80013 14.1191 7.37123 14.6834 8.88335C15.1412 10.1015 14.8484 11.4747 13.9334 12.4L11.8167 14.5167C14.1893 18.6893 17.6441 22.1441 21.8167 24.5167L23.9334 22.4C24.8587 21.485 26.2319 21.1921 27.45 21.65C28.9621 22.2143 30.5332 22.6056 32.1334 22.8167C33.8093 23.0531 35.042 24.508 35 26.2Z" stroke="#EC691F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            + 375 (29) 130 52 33
                        </a>
                    </li>
                    <li>
                        <a href="mailto:study@armtek.by">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66671 6.66663H33.3334C35.1667 6.66663 36.6667 8.16663 36.6667 9.99996V30C36.6667 31.8333 35.1667 33.3333 33.3334 33.3333H6.66671C4.83337 33.3333 3.33337 31.8333 3.33337 30V9.99996C3.33337 8.16663 4.83337 6.66663 6.66671 6.66663Z" stroke="#EC691F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M36.6667 10L20 21.6667L3.33337 10" stroke="#EC691F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Study@armtek.by
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="contact-form">
            <form action="" class="common-form">
                <h3 class="form-header">Напишите нам!</h3>
                <p class="form-description centered">Для получения консультации либо бронирования помещения</p>
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