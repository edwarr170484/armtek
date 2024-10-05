<x-app-layout>
    <x-breadcrumbs :breadcrumbs="$breadcrumbs"></x-breadcrumbs>
    <div class="container display-block">
        <x-page-header :class="'page-header centered'">{{ $title }}</x-page-header>
        <div class="personal">
            <div class="personal-menu dropdown tab-navs">
                <div class="dropdown-item">
                    <div class="dropdown-title active">
                        <a href="javascript:void(0)" data-tab="common-tab" class="tab-nav">Общая информация</a>
                    </div>
                </div>
                <div class="dropdown-item">
                    <div class="dropdown-title">
                        <a href="javascript:void(0)">Для Беларуси</a>
                        <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.75 2.125L11.5 10.875L20.25 2.125" stroke="#272727" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="dropdown-content">
                        <a href="javascript:void(0)" data-tab="belarus-tab" class="tab-nav">Политика обработки персональных данных</a>
                    </div>
                </div>
                <div class="dropdown-item">
                    <div class="dropdown-title">
                        <a href="javascript:void(0)">Для России</a>
                        <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.75 2.125L11.5 10.875L20.25 2.125" stroke="#272727" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="dropdown-content">
                        <a href="javascript:void(0)" data-tab="russia-tab" class="tab-nav">Политика обработки персональных данных</a>
                    </div>
                </div>
                <div class="dropdown-item">
                    <div class="dropdown-title">
                        <a href="javascript:void(0)">Для Казахстана</a>
                        <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.75 2.125L11.5 10.875L20.25 2.125" stroke="#272727" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="dropdown-content">
                        <a href="javascript:void(0)" data-tab="kazax-tab" class="tab-nav">Политика обработки персональных данных</a>
                    </div>
                </div>
                <div class="dropdown-item">
                    <div class="dropdown-title">
                        <a href="javascript:void(0)">Для Кыргызстана</a>
                        <svg width="23" height="13" viewBox="0 0 23 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.75 2.125L11.5 10.875L20.25 2.125" stroke="#272727" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="dropdown-content">
                        <a href="javascript:void(0)" data-tab="kirgiz-tab" class="tab-nav">Политика обработки персональных данных</a>
                    </div>
                </div>
            </div>
            <div class="peronal-texts tabs">
                    <div class="page-text tab active" id="common-tab">
                        <h3>О чем этот документ?</h3>
                        <p>Задача Политики конфиденциальности персональной информации — объяснить порядок и условия обработки ваших персональных данных, когда вы посещаете веб-сайты или пользуетесь онлайн-сервисами, которые соответственно принадлежат нам или предоставляются нами.</p>
                        <p>Когда это не противоречит применимому к нашим с вами отношениям законодательству о персональных данных , настоящая Политика также является согласием субъекта персональных данных на обработку, в т.ч. на сбор, персональных данных.</p>
                        <p>Мы можем периодически обновлять Политику без специального уведомления вас, а ее актуальная дата всегда будет указана непосредственно под заголовком. Мы рекомендуем время от времени просматривать эту страницу, чтобы отслеживать возможные изменения.</p>
                        <h3>Что такое персональные данные и их обработка?</h3>
                        <p>Персональные данные (персональная информация, личные данные, информация персонального характера и т.д.) — это любая информация, которая прямо или косвенно относится к вам как физическому лицу . Несмотря на то что в отдельных случаях Применимое законодательством может уточнять данное понятие, сужая или расширяя его в отношении некоторых категорий данных (например, в отношении технической информации о пользовательских устройствах), мы в любом случае придерживаемся максимально широкого подхода в определении того, какие данные следует считать персональными.</p>
                        <p>Обработка персональных данных — это любые действия (операции) с персональными данными, включая их сбор, накопление, хранение, изменение, дополнение, использование, передачу (распространение, предоставление, доступ) третьим лицам, блокирование, удаление и уничтожение.</p>
                        <p>При этом конкретные действия (операции), которые мы совершаем с вашими персональными данными доводятся до вашего сведения до начала обработки при помощи соответствующих юридических документов (оферт, условий использования и т.д.) или элементов пользовательского интерфейса (например, форма для заполнения внутри сайта означает, что мы осуществляем сбор ваших персональных данных).</p>
                    </div>
                    <div class="page-text tab" id="belarus-tab">
                        <h3>О чем этот документ в Беларуси?</h3>
                        <p>Задача Политики конфиденциальности персональной информации — объяснить порядок и условия обработки ваших персональных данных, когда вы посещаете веб-сайты или пользуетесь онлайн-сервисами, которые соответственно принадлежат нам или предоставляются нами.</p>
                        <p>Когда это не противоречит применимому к нашим с вами отношениям законодательству о персональных данных , настоящая Политика также является согласием субъекта персональных данных на обработку, в т.ч. на сбор, персональных данных.</p>
                        <p>Мы можем периодически обновлять Политику без специального уведомления вас, а ее актуальная дата всегда будет указана непосредственно под заголовком. Мы рекомендуем время от времени просматривать эту страницу, чтобы отслеживать возможные изменения.</p>
                        <h3>Что такое персональные данные и их обработка?</h3>
                        <p>Персональные данные (персональная информация, личные данные, информация персонального характера и т.д.) — это любая информация, которая прямо или косвенно относится к вам как физическому лицу . Несмотря на то что в отдельных случаях Применимое законодательством может уточнять данное понятие, сужая или расширяя его в отношении некоторых категорий данных (например, в отношении технической информации о пользовательских устройствах), мы в любом случае придерживаемся максимально широкого подхода в определении того, какие данные следует считать персональными.</p>
                        <p>Обработка персональных данных — это любые действия (операции) с персональными данными, включая их сбор, накопление, хранение, изменение, дополнение, использование, передачу (распространение, предоставление, доступ) третьим лицам, блокирование, удаление и уничтожение.</p>
                        <p>При этом конкретные действия (операции), которые мы совершаем с вашими персональными данными доводятся до вашего сведения до начала обработки при помощи соответствующих юридических документов (оферт, условий использования и т.д.) или элементов пользовательского интерфейса (например, форма для заполнения внутри сайта означает, что мы осуществляем сбор ваших персональных данных).</p>
                    </div>
                    <div class="page-text tab" id="russia-tab">
                        <h3>О чем этот документ в России?</h3>
                        <p>Задача Политики конфиденциальности персональной информации — объяснить порядок и условия обработки ваших персональных данных, когда вы посещаете веб-сайты или пользуетесь онлайн-сервисами, которые соответственно принадлежат нам или предоставляются нами.</p>
                        <p>Когда это не противоречит применимому к нашим с вами отношениям законодательству о персональных данных , настоящая Политика также является согласием субъекта персональных данных на обработку, в т.ч. на сбор, персональных данных.</p>
                        <p>Мы можем периодически обновлять Политику без специального уведомления вас, а ее актуальная дата всегда будет указана непосредственно под заголовком. Мы рекомендуем время от времени просматривать эту страницу, чтобы отслеживать возможные изменения.</p>
                        <h3>Что такое персональные данные и их обработка?</h3>
                        <p>Персональные данные (персональная информация, личные данные, информация персонального характера и т.д.) — это любая информация, которая прямо или косвенно относится к вам как физическому лицу . Несмотря на то что в отдельных случаях Применимое законодательством может уточнять данное понятие, сужая или расширяя его в отношении некоторых категорий данных (например, в отношении технической информации о пользовательских устройствах), мы в любом случае придерживаемся максимально широкого подхода в определении того, какие данные следует считать персональными.</p>
                        <p>Обработка персональных данных — это любые действия (операции) с персональными данными, включая их сбор, накопление, хранение, изменение, дополнение, использование, передачу (распространение, предоставление, доступ) третьим лицам, блокирование, удаление и уничтожение.</p>
                        <p>При этом конкретные действия (операции), которые мы совершаем с вашими персональными данными доводятся до вашего сведения до начала обработки при помощи соответствующих юридических документов (оферт, условий использования и т.д.) или элементов пользовательского интерфейса (например, форма для заполнения внутри сайта означает, что мы осуществляем сбор ваших персональных данных).</p>
                    </div>
                    <div class="page-text tab" id="kazax-tab">
                        <h3>О чем этот документ в Казахстане?</h3>
                        <p>Задача Политики конфиденциальности персональной информации — объяснить порядок и условия обработки ваших персональных данных, когда вы посещаете веб-сайты или пользуетесь онлайн-сервисами, которые соответственно принадлежат нам или предоставляются нами.</p>
                        <p>Когда это не противоречит применимому к нашим с вами отношениям законодательству о персональных данных , настоящая Политика также является согласием субъекта персональных данных на обработку, в т.ч. на сбор, персональных данных.</p>
                        <p>Мы можем периодически обновлять Политику без специального уведомления вас, а ее актуальная дата всегда будет указана непосредственно под заголовком. Мы рекомендуем время от времени просматривать эту страницу, чтобы отслеживать возможные изменения.</p>
                        <h3>Что такое персональные данные и их обработка?</h3>
                        <p>Персональные данные (персональная информация, личные данные, информация персонального характера и т.д.) — это любая информация, которая прямо или косвенно относится к вам как физическому лицу . Несмотря на то что в отдельных случаях Применимое законодательством может уточнять данное понятие, сужая или расширяя его в отношении некоторых категорий данных (например, в отношении технической информации о пользовательских устройствах), мы в любом случае придерживаемся максимально широкого подхода в определении того, какие данные следует считать персональными.</p>
                        <p>Обработка персональных данных — это любые действия (операции) с персональными данными, включая их сбор, накопление, хранение, изменение, дополнение, использование, передачу (распространение, предоставление, доступ) третьим лицам, блокирование, удаление и уничтожение.</p>
                        <p>При этом конкретные действия (операции), которые мы совершаем с вашими персональными данными доводятся до вашего сведения до начала обработки при помощи соответствующих юридических документов (оферт, условий использования и т.д.) или элементов пользовательского интерфейса (например, форма для заполнения внутри сайта означает, что мы осуществляем сбор ваших персональных данных).</p>
                    </div>
                    <div class="page-text tab" id="kirgiz-tab">
                        <h3>О чем этот документ в Кыргызтане?</h3>
                        <p>Задача Политики конфиденциальности персональной информации — объяснить порядок и условия обработки ваших персональных данных, когда вы посещаете веб-сайты или пользуетесь онлайн-сервисами, которые соответственно принадлежат нам или предоставляются нами.</p>
                        <p>Когда это не противоречит применимому к нашим с вами отношениям законодательству о персональных данных , настоящая Политика также является согласием субъекта персональных данных на обработку, в т.ч. на сбор, персональных данных.</p>
                        <p>Мы можем периодически обновлять Политику без специального уведомления вас, а ее актуальная дата всегда будет указана непосредственно под заголовком. Мы рекомендуем время от времени просматривать эту страницу, чтобы отслеживать возможные изменения.</p>
                        <h3>Что такое персональные данные и их обработка?</h3>
                        <p>Персональные данные (персональная информация, личные данные, информация персонального характера и т.д.) — это любая информация, которая прямо или косвенно относится к вам как физическому лицу . Несмотря на то что в отдельных случаях Применимое законодательством может уточнять данное понятие, сужая или расширяя его в отношении некоторых категорий данных (например, в отношении технической информации о пользовательских устройствах), мы в любом случае придерживаемся максимально широкого подхода в определении того, какие данные следует считать персональными.</p>
                        <p>Обработка персональных данных — это любые действия (операции) с персональными данными, включая их сбор, накопление, хранение, изменение, дополнение, использование, передачу (распространение, предоставление, доступ) третьим лицам, блокирование, удаление и уничтожение.</p>
                        <p>При этом конкретные действия (операции), которые мы совершаем с вашими персональными данными доводятся до вашего сведения до начала обработки при помощи соответствующих юридических документов (оферт, условий использования и т.д.) или элементов пользовательского интерфейса (например, форма для заполнения внутри сайта означает, что мы осуществляем сбор ваших персональных данных).</p>
                    </div>
                <form action="" class="personal-form common-form">
                    <h3 class="form-header">Отозвать согласие на обработку персональных данных</h3>
                    <p>В данном разделе Вы можете отозвать ранее предоставленное на сайте edu.armtek.by согласие на обработку персональных данных</p>
                    <div class="form-rows">
                        <div class="form-row">
                            <div class="form-groups">
                                <input type="text" class="form-control" placeholder="Логин*" name="login">
                                <input type="password" class="form-control" placeholder="Пароль*" name="password">
                            </div>
                            <div class="form-alert">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25 45.8333C36.5059 45.8333 45.8333 36.5059 45.8333 25C45.8333 13.4941 36.5059 4.16666 25 4.16666C13.494 4.16666 4.16663 13.4941 4.16663 25C4.16663 36.5059 13.494 45.8333 25 45.8333Z" stroke="#C9191B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M25 33.3333V25" stroke="#C9191B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <circle cx="25" cy="16.6667" r="2.08333" fill="#C9191B"/>
                                </svg>
                                <label>Ваш отзыв согласия на обработку Ваших персональных данных повлечет удаление Вашего личного кабинета на сайте edu.armtek.by и сделает невозможным его использование</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="">Изложите суть Ваших требований</label>
                                <textarea name="message" id="" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="button bg-orange">Отозвать согласие на обработку персональных данных</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>