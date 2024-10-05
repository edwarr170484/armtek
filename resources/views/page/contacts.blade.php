<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block contact-section">
        <x-page-header :class="'page-header'">{{ $title }}</x-page-header>
        <div class="contact-description">
            <div class="contact-info">
                <div class="contact-row">
                    <div class="contact-pane">
                        <div><a href="mailto:Study.armtek.by" class="contact">Study.armtek.by</a></div>
                        <div class="contact-label">Email</div>
                    </div>
                    <div class="contact-pane">
                        <div ><a href="tel:7600" class="contact">7600</a></div>
                        <div class="contact-label">Колл-центр</div>
                    </div>
                    <div class="contact-pane">
                        <div><a href="tel:375 (29) 130 5 233" class="contact">375 (29) 130 5 233</a></div>
                        <div class="contact-label">Учебный центр</div>
                    </div>
                </div>
                <div class="contact-row">
                    <div class="contact-pane">
                        <div class="contact">г. Минск, ул. Ольшевского, д. 22</div>
                        <div class="contact-label">Email</div>
                    </div>
                </div>
                <div class="common-info">
                    <p>Общество с ограниченной ответственностью “Еврозапчасть”</p>
                    <p>ООО “Еврозапчасть”</p>
                    <p>р/с (BYN): BY41 ALFA 3012 2009 8401 5027 0000</p>
                    <p>в ЗАО «Альфа-Банк» код: ALFABY2X</p>
                    <p>220114 г.Минск, ул.П. Мстиславца, 9</p>
                    <p>УНП 190063577</p>
                    <p>регистрация Минским облисполкомом</p>
                    <p>27.01.2000г.</p>
                </div>
            </div>
            <div class="contact-map">
                <div style="position:relative;overflow:hidden;width:100%;height:100%;"><a href="https://yandex.ru/maps/157/minsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Минск</a><a href="https://yandex.ru/maps/157/minsk/house/Zk4YcANpTE0AQFtpfXVyc3VgZA==/?indoorLevel=1&ll=27.649587%2C53.932930&source=serp_navig&utm_medium=mapframe&utm_source=maps&z=17" style="color:#eee;font-size:12px;position:absolute;top:14px;">Яндекс Карты — транспорт, навигация, поиск мест</a><iframe src="https://yandex.ru/map-widget/v1/?indoorLevel=1&ll=27.649587%2C53.932930&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxOTA5ODIzODQxEk3QkdC10LvQsNGA0YPRgdGMLCDQnNGW0L3RgdC6LCDQstGD0LvRltGG0LAg0J_Rj9GC0YDQsCDQnNGB0YbRltGB0LvQsNGe0YbQsCwgOSIKDVoy3UEVUrtXQg%2C%2C&source=serp_navig&z=17" width="100%" height="100%" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
        <div class="contact-form">
            <form action="" class="common-form">
                <h3 class="form-header">Будем рады ответить на Ваши вопросы</h3>
                <p class="form-description centered">Вы можете написать нам по любому вопросу: от обучения до сотрудничества</p>
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