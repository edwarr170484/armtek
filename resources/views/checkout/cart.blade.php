<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block checkout-section">
        <x-page-header :class="'page-header'">{{ $title }}</x-page-header>
        <div class="container">
            <div class="cart">
                <div class="cart-head">
                    <div class="big-checkbox">
                        <input type="checkbox" name="agreement" value="1" required="">
                        <label><b>Выбрать все</b></label>
                    </div>
                </div>
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="big-checkbox">
                            <input type="checkbox" name="agreement" value="1" required="">
                        </div>
                        <div class="cart-product">
                            <div class="cart-thumb">
                                <img src="/img/cards/card-1.png" alt="">
                            </div>
                            <div class="cart-info">
                                <a href="">Легковая программа. Базовый уровень</a>
                                <p>Старт 15 октября</p>
                            </div>
                        </div>
                        <div class="cart-count">
                            <div class="counter">
                                <button>
                                    <svg width="30" height="5" viewBox="0 0 30 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.5833 5.08332H0.416626V0.916656H29.5833V5.08332Z" fill="#272727"/>
                                    </svg>
                                </button>
                                <input type="text" value="1">
                                <button>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.5833 17.0833H17.0833V29.5833H12.9166V17.0833H0.416626V12.9167H12.9166V0.416656H17.0833V12.9167H29.5833V17.0833Z" fill="#272727"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="cart-price">
                            <div class="price">200.00 BYN</div>
                            <div class="cart-buttons">
                                <button>
                                    <svg width="48" height="42" viewBox="0 0 48 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.4166 5.60416C40.2676 3.45414 37.3523 2.24619 34.3125 2.24619C31.2726 2.24619 28.3573 3.45414 26.2083 5.60416L24 7.81249L21.7916 5.60416C17.3158 1.12835 10.0591 1.12835 5.5833 5.60416C1.10749 10.08 1.10749 17.3367 5.5833 21.8125L7.79163 24.0208L24 40.2292L40.2083 24.0208L42.4166 21.8125C44.5666 19.6635 45.7746 16.7482 45.7746 13.7083C45.7746 10.6685 44.5666 7.75316 42.4166 5.60416Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.25 12.5H10.4167H43.75" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M41.0833 12.5C41.0833 11.6716 40.4117 11 39.5833 11C38.7549 11 38.0833 11.6716 38.0833 12.5H41.0833ZM11.9166 12.5C11.9166 11.6716 11.2451 11 10.4166 11C9.5882 11 8.91663 11.6716 8.91663 12.5H11.9166ZM15.1666 12.5C15.1666 13.3284 15.8382 14 16.6666 14C17.4951 14 18.1666 13.3284 18.1666 12.5H15.1666ZM31.8333 12.5C31.8333 13.3284 32.5049 14 33.3333 14C34.1617 14 34.8333 13.3284 34.8333 12.5H31.8333ZM38.0833 12.5V41.6667H41.0833V12.5H38.0833ZM38.0833 41.6667C38.0833 43.1394 36.8894 44.3334 35.4166 44.3334V47.3334C38.5462 47.3334 41.0833 44.7963 41.0833 41.6667H38.0833ZM35.4166 44.3334H14.5833V47.3334H35.4166V44.3334ZM14.5833 44.3334C13.1105 44.3334 11.9166 43.1394 11.9166 41.6667H8.91663C8.91663 44.7963 11.4537 47.3334 14.5833 47.3334V44.3334ZM11.9166 41.6667V12.5H8.91663V41.6667H11.9166ZM18.1666 12.5V8.33335H15.1666V12.5H18.1666ZM18.1666 8.33335C18.1666 6.86059 19.3605 5.66669 20.8333 5.66669V2.66669C17.7037 2.66669 15.1666 5.20374 15.1666 8.33335H18.1666ZM20.8333 5.66669H29.1666V2.66669H20.8333V5.66669ZM29.1666 5.66669C30.6394 5.66669 31.8333 6.86059 31.8333 8.33335H34.8333C34.8333 5.20374 32.2962 2.66669 29.1666 2.66669V5.66669ZM31.8333 8.33335V12.5H34.8333V8.33335H31.8333Z" fill="black"/>
                                        <path d="M20.8334 22.9167V35.4167" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M29.1666 22.9167V35.4167" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="big-checkbox">
                            <input type="checkbox" name="agreement" value="1" required="">
                        </div>
                        <div class="cart-product">
                            <div class="cart-thumb">
                                <img src="/img/cards/card-2.png" alt="">
                            </div>
                            <div class="cart-info">
                                <a href="">Легковая программа. Продвинутый уровень</a>
                                <p>Старт 15 октября</p>
                            </div>
                        </div>
                        <div class="cart-count">
                            <div class="counter">
                                <button>
                                    <svg width="30" height="5" viewBox="0 0 30 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.5833 5.08332H0.416626V0.916656H29.5833V5.08332Z" fill="#272727"/>
                                    </svg>
                                </button>
                                <input type="text" value="1">
                                <button>
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.5833 17.0833H17.0833V29.5833H12.9166V17.0833H0.416626V12.9167H12.9166V0.416656H17.0833V12.9167H29.5833V17.0833Z" fill="#272727"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="cart-price">
                            <div class="price">200.00 BYN</div>
                            <div class="cart-buttons">
                                <button>
                                    <svg width="48" height="42" viewBox="0 0 48 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.4166 5.60416C40.2676 3.45414 37.3523 2.24619 34.3125 2.24619C31.2726 2.24619 28.3573 3.45414 26.2083 5.60416L24 7.81249L21.7916 5.60416C17.3158 1.12835 10.0591 1.12835 5.5833 5.60416C1.10749 10.08 1.10749 17.3367 5.5833 21.8125L7.79163 24.0208L24 40.2292L40.2083 24.0208L42.4166 21.8125C44.5666 19.6635 45.7746 16.7482 45.7746 13.7083C45.7746 10.6685 44.5666 7.75316 42.4166 5.60416Z" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <button>
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.25 12.5H10.4167H43.75" stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M41.0833 12.5C41.0833 11.6716 40.4117 11 39.5833 11C38.7549 11 38.0833 11.6716 38.0833 12.5H41.0833ZM11.9166 12.5C11.9166 11.6716 11.2451 11 10.4166 11C9.5882 11 8.91663 11.6716 8.91663 12.5H11.9166ZM15.1666 12.5C15.1666 13.3284 15.8382 14 16.6666 14C17.4951 14 18.1666 13.3284 18.1666 12.5H15.1666ZM31.8333 12.5C31.8333 13.3284 32.5049 14 33.3333 14C34.1617 14 34.8333 13.3284 34.8333 12.5H31.8333ZM38.0833 12.5V41.6667H41.0833V12.5H38.0833ZM38.0833 41.6667C38.0833 43.1394 36.8894 44.3334 35.4166 44.3334V47.3334C38.5462 47.3334 41.0833 44.7963 41.0833 41.6667H38.0833ZM35.4166 44.3334H14.5833V47.3334H35.4166V44.3334ZM14.5833 44.3334C13.1105 44.3334 11.9166 43.1394 11.9166 41.6667H8.91663C8.91663 44.7963 11.4537 47.3334 14.5833 47.3334V44.3334ZM11.9166 41.6667V12.5H8.91663V41.6667H11.9166ZM18.1666 12.5V8.33335H15.1666V12.5H18.1666ZM18.1666 8.33335C18.1666 6.86059 19.3605 5.66669 20.8333 5.66669V2.66669C17.7037 2.66669 15.1666 5.20374 15.1666 8.33335H18.1666ZM20.8333 5.66669H29.1666V2.66669H20.8333V5.66669ZM29.1666 5.66669C30.6394 5.66669 31.8333 6.86059 31.8333 8.33335H34.8333C34.8333 5.20374 32.2962 2.66669 29.1666 2.66669V5.66669ZM31.8333 8.33335V12.5H34.8333V8.33335H31.8333Z" fill="black"/>
                                        <path d="M20.8334 22.9167V35.4167" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M29.1666 22.9167V35.4167" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-total">
                    Итого: <span>200.00 BYN</span>
                </div>
                <div class="cart-promo">
                    <form action="">
                        <div class="form-group promo-group wrong"><!--set class "success" instead of "wrong" for correct promocode -->
                            <input type="text" class="form-control" placeholder="Промокод">
                            <button class="button" disabled>Применить</button>
                            <div class="error">Данный промокод более не действителен</div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="cart-payment">
                <h3>Способ оплаты</h3>
                <h4>Оплата по счету</h4>
                <p>
                    Для оплаты услуг по счету необходимо заполнить данные в форме, после отправки данных с вами свяжется наш специалист для завершения оплаты
                </p>
                <form method="POST" action="{{ route('register') }}" class="common-form auth-form">
                    <h3 class="form-header">Заполните данные для <br>формирования счета</h3>
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
                            <button type="button" class="button bg-orange">Отправить</button>
                        </div>
                    </div>
                </form>
                <h4>Оплата картой</h4>
                <p>
                    Наш сайт подключен к интернет-эквайрингу, и вы можете оплатить услугу банковской картой Visa, MasterCard. После клика “Оплатить картой” откроется защищенное окно с платежной страницей Банка “АльфаБанк”, где вам необходимо будет ввести данные вашей банковской карты
                </p>
                <button class="button bg-orange pay-card">Оплатить картой</button>
            </div>
        </div>
    </div>
</x-app-layout>