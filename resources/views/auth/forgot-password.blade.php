<x-guest-layout>
    <div class="container display-block">
        <form method="POST" action="{{ route('password.email') }}" class="login-form common-form auth-form">
            <h3 class="form-header">Восстановление пароля</h3>
            <p>Введите email, использованный при регистрации для получения инструкций по восстановлению пароля</p>
            <div class="form-rows">
                <div class="form-row">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email*" required>
                    </div>
                </div>
                <div class="form-row">
                    @csrf
                    <button type="button" class="button bg-orange">Отправить</button>
                </div>
            </div>
        </form>
    </div>
    <a href="" class="support-link">Поддержка</a>
</x-guest-layout>
