<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block">
        <x-page-banner :title="$title" :image="$image"></x-page-banner>
        <div class="product-inner">
            <div class="product-info">
                <div class="product-description">
                    <p>В ходе обучения Вы изучите все основные узлы и агрегаты легкового автомобиля - от двигателя до электрооборудования. Вы узнаете, как работают различные системы автомобиля, какие компоненты в них задействованы и как они взаимодействуют друг с другом. Особое внимание будет уделено принципам работы современных автомобильных технологий, таких как системы впрыска топлива, электронные системы управления двигателем, антиблокировочные тормозные системы и многое другое.</p>
                    <p>Курс включает в себя подробные теоретические материалы, сопровождаемые наглядными схемами и иллюстрациями. В ходе обучения Вы сможете закрепить полученные знания с помощью интерактивных тестов. По завершении обучения Вы будете обладать глубоким пониманием устройства легкового автомобиля, что позволит Вам эффективно диагностировать и обслуживать транспортные средства.</p>
                </div>
                <div class="page-text">
                    <h3>Курс подойдет:</h3>
                    <ul class="marked-list">
                        <li>Менеджерам по продажам</li>
                        <li>Консультантам</li>
                        <li>Логистам</li>
                        <li>Специалистам по подбору и поставке автозапчастей</li>
                    </ul>
                    <h3>Программа курса:</h3>
                    <ul class="marked-list">
                        <li>Идентификация автомобиля клиента в каталогах и программах подбора</li>
                        <li>Работа с самыми востребованными инструментами подбора: каталоги TecDoc, оригинальные каталоги автопроизводителей, электронные и бумажные каталоги производителей автозапчастей, каталоги ЭТП АРМТЕК;</li>
                        <li>Алгоритм подбора запчастей в т.ч. и по самым популярным и оборачиваемым товарным группам (масла, тех. жидкости, компоненты подвески, тормозная система)</li>
                    </ul>
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
        <div class="product-details page-text">
            <h3>
                Подробнее
                <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.75 2.125L11.5 10.875L20.25 2.125" stroke="#272727" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </h3>
            <ul class="product-facts">
                <li><span>1.</span> Вводное слово, организационные вопросы, настройка рабочих мест </li>
                <li><span>2.</span> Важность подбора запчастей, наиболее распространенные ошибки</li>
                <li><span>3.</span> Инструменты подбора – онлайн и оффлайн, решения на рынке, оценка инструментов, виды идентификации автомобилей </li>
                <li><span>4.</span> Описание товарной группы «масла моторные, трансмиссионные» - виды, характеристики, виды подбора </li>
                <li><span>5.</span> Описание товарной группы «антифриз» - виды, характеристики, виды подбора</li>
                <li><span>6.</span> Описание товарной группы «фильтры» - виды, характеристики, виды подбора</li>
                <li><span>7.</span> Описание товарной группы «тормозная система» - виды, характеристики, виды подбора</li>
                <li><span>8.</span> Описание товарной группы «детали подвески» - виды, характеристики, виды подбора</li>
                <li><span>9.</span> Описание товарной группы «система зажигания, компоненты электросистем» - виды, характеристики, виды подбора</li>
                <li><span>10.</span>Описание товарной группы «Приводы, ШРУСы» - виды, характеристики, виды подбора</li>
                <li><span>11.</span> Ответы на вопросы участников, пояснения к пройденному материалу, детализация методик подбора по товарным группам (по запросу группы)</li>
                <li><span>12.</span> Подведение итогов</li>
            </ul>
        </div>
        <div class="product-same pade-text">
            <h3>Курсы, которые могут вас заинтересовать</h3>
            <div class="product-same-slider owl-carousel">
                <div class="owl-slide">
                    <figure>
                        <img src="/img/courses/course-1.png" alt="Elephant at sunset" />
                        <figcaption>Устройство грузового автомобиля</figcaption>
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
        </div>
    </div>
</x-app-layout>