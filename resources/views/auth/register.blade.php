<x-guest-layout>
    <div class="container display-block">
        <div class="tab-navs button-navs centered">
            <a href="javascript:void(0)" class="button tab-nav active" data-tab="phizical-tab">Для физических лиц</a>
            <a href="javascript:void(0)" class="button tab-nav" data-tab="jur-tab">Для юридических лиц</a>
        </div>
        <div class="tabs">
            <div class="tab active" id="phizical-tab">
                <form method="POST" action="{{ route('register') }}" class="register-form common-form auth-form">
                    <h3 class="form-header">Регистрация</h3>
                    <div class="form-rows">
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="ФИО*" required>
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
                            <div class="form-group">
                                <input class="form-control" type="text" name="login" placeholder="Логин*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Пароль*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password-repeat" placeholder="Повторите пароль*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="checkbox">
                                <input type="checkbox" name="agreement" value="1" required checked>
                                <label>Даю согласие на обработку своих персональных данных в соответствии с <a href="">Политикой обработки персональных данных</a></label>
                            </div>
                        </div>
                        <div class="form-row">
                            @csrf
                            <button type="button" class="button bg-orange">Зарегистрироваться</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab" id="jur-tab">
                <form method="POST" action="{{ route('register') }}" class="register-form common-form auth-form">
                    <h3 class="form-header">Регистрация</h3>
                    <div class="form-rows">
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="text" name="organization" placeholder="Наименование организации*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="text" name="unp" placeholder="ИНН/УНП*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="ФИО*" required>
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
                            <div class="form-group">
                                <input class="form-control" type="text" name="login" placeholder="Логин*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Пароль*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password-repeat" placeholder="Повторите пароль*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="checkbox">
                                <input type="checkbox" name="agreement" value="1" required checked>
                                <label>Даю согласие на обработку своих персональных данных в соответствии с <a href="">Политикой обработки персональных данных</a></label>
                            </div>
                        </div>
                        <div class="form-row">
                            @csrf
                            <button type="button" class="button bg-orange">Зарегистрироваться</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="" class="support-link">Поддержка</a>
</x-guest-layout>
