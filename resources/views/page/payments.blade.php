<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block payment-section">
        <div class="tab-navs button-navs">
            <a href="javascript:void(0)" class="button tab-nav active" data-tab="phizical-tab">Для физических лиц</a>
            <a href="javascript:void(0)" class="button tab-nav" data-tab="jur-tab">Для юридических лиц</a>
        </div>
        <div class="tabs">
            <div class="page-text tab active" id="phizical-tab">
                <h3>Через интернет банкинг:</h3>
                <p>Для оплаты через сервисы интернет банкинга необходимо перейти в раздел перевода юридическим лицам по номеру счета</p>
                <h3>Наличными:</h3>
                <ul class="marked-list">
                    <li>В кассах банков</li>
                    <li>В инфокиосках с купюроприемником</li>
                    <li>Предварительно получив счет на оплату</li>
                </ul>
                <h3>Интрнет эквайринг:</h3>
                <p>Номер счета предоставляется специалистами отдела обучения по запросу</p>
            </div>
            <div class="page-text tab" id="jur-tab">
                <h3>Порядок оформления счетов и выписки накладных</h3>
                <h3>Для получения счета на оплату можно:</h3>
                <ul class="marked-list">
                    <li>Оформить заказ через корзину сайта и выбрать в форме оплаты Счет для юридических лиц</li>
                    <li>Отправить электронное письмо на адрес study@armtek.by</li>
                    <li>Позвонить в Отдел обучения. Сотрудник Отдела обучения обрабатывает заказ и выставляет счет, действительный в течении 10-ти календарных дней</li>
                </ul>
                <h3>После оплаты необходимо направить:</h3>
                <p>Подтверждающий оплату документ на электронную почту study@armtek.by или своему менеджеру</p>
            </div>
        </div>
    </div>
</x-app-layout>