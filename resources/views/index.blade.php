<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'public/css/null.css',
        'public/css/main.css',
        'public/css/main-header.css'
    ])
</head>
<body>
    <section class="main-header m_b_40">
        <div class="__container">
        <div class="header d_flex jc_sb f_a_center">
            <div class="header-logo d_flex">
                <img src="/img/main-logo.svg" alt="Логотип пропуск легко">
                <p>ПРОПУСК<br>ЛЕГКО</p>
            </div>
            <div class="header-nav">
                <ul class="nav-menu d_flex f_gap_40">
                    <li class="menu-list">
                        <a href="#" class="list-items">О нас</a>
                    </li>
                    <li class="menu-list">
                        <a href="#" class="list-items">Услуги</a>
                    </li>
                    <li class="menu-list">
                        <a href="#" class="list-items">Выбрать массу</a>
                    </li>
                    <li class="menu-list">
                        <a href="#" class="list-items">Выбрать зону</a>
                    </li>
                    <li class="menu-list">
                        <a href="#" class="list-items">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="header-call d_flex f_a_center f_gap_40">
                <a href="tel:88003223344" class="call-number blue_color">8 800 322 33 44</a>
                <a href="tel:88003223344" class="btn">Позвоните мне</a>
            </div>
        </div>
        </div>
    </section>
    <section class="main-block m_b_40">
            <div class="__container">
            <div class="main-page ">
            <h1>Пропуска в Москву<br>для грузового<br>транспорта</h1>
            <div class="main-info d_flex f_col f_gap_40">
            <p>Помогаем оформлять дневные и ночные пропуска на МКАД,<br> ТТК и СК для грузовых автомобилей. Выдаем разрешения,<br> действующие 10 дней, 6 или 12 месяцев.
            </p>
            <p>
            Хотите получить разрешение на грузовой транспорт<br> максимально быстро? Оставьте заявку!
            </p>
            <a href="#" class="btn">Заказать пропуск</a>
            </div>
        </div>
            </div>
        </section>

        <section class="order-pass  m_b_40">
            <div class="__container">
                <div class="card-pass d_flex f_col">
                    <h2 class="white_color">Проверьте Ваш пропуск</h2>
                    <form action="#" class="pass-form d_flex m_b_22">
                        <input type="text" placeholder="Введите номер авто" value="">
                        <input type="submit" value="Заказать пропуск">
                    </form>
                    <p class="white_color">* Проверьте действие вашего пропуска в несколько кликов! Просто введите номерной знак транспортного средства и кликните по кнопке «Проверить».</p>
                </div>
            </div>
        </section>

        <section class="type-pass m_b_40">
            <div class="__container">
                <h2>Выберите тип пропуска</h2>
                <div class="type-category d_flex f_col f_gap_35">
                    <div class="category-pass d_flex f_gap_25">
                        <a href="#" class="btn-common btn-active">Дневной</a>
                        <a href="#" class="btn-common">Ночной</a>
                        <a href="#" class="btn-common">Круглосуточный</a>
                    </div>
                    <div class="category-card d_flex jc_sb f_gap_40">
                        <div class="category-card__list">
                            <p class="category-card__list-day">Дневной пропуск на <span class="card__list-abbr">СК</span></p>
                            <form action="#" class="d_flex f_col f_gap_25">
                                <div class="category-card__list-price d_flex">
                                <input type="radio" name="diurnalPass" value="OneTime" checked/>

                                    <div><label for="OneTime">Разовый / срок изготовления 2 дня<br> <span class="card__list-price">5 000 руб</span></label></div>
                                </div>
                                
                                <div class="category-card__list-price d_flex">
                                <input type="radio" name="diurnalPass" value="YearTime"/>
                                    <div><label for="YearTime">На год / срок изготовления 10 дней<br><span class="card__list-price">13 000 руб</span></label></div>
                                </div>
                                <input type="submit" value="Заказать пропуск" class="btn">
                            </form>
                        </div>

                        <div class="category-card__list">
                            <p class="category-card__list-day">Дневной пропуск на <span class="card__list-abbr">СК</span></p>
                            <form action="#" class="d_flex f_col f_gap_25">
                                <div class="category-card__list-price d_flex">
                                <input type="radio" name="diurnalPass" value="OneTime" checked/>

                                    <div><label for="OneTime">Разовый / срок изготовления 2 дня<br> <span class="card__list-price">5 000 руб</span></label></div>
                                </div>
                                
                                <div class="category-card__list-price d_flex">
                                <input type="radio" name="diurnalPass" value="YearTime"/>
                                    <div><label for="YearTime">На год / срок изготовления 10 дней<br><span class="card__list-price">13 000 руб</span></label></div>
                                </div>
                                <input type="submit" value="Заказать пропуск" class="btn">
                            </form>
                        </div>

                        <div class="category-card__list">
                            <p class="category-card__list-day">Дневной пропуск на <span class="card__list-abbr">СК</span></p>
                            <form action="#" class="d_flex f_col f_gap_25">
                                <div class="category-card__list-price d_flex">
                                <input type="radio" name="diurnalPass" value="OneTime" checked/>

                                    <div><label for="OneTime">Разовый / срок изготовления 2 дня<br> <span class="card__list-price">5 000 руб</span></label></div>
                                </div>
                                
                                <div class="category-card__list-price d_flex">
                                <input type="radio" name="diurnalPass" value="YearTime"/>
                                    <div><label for="YearTime">На год / срок изготовления 10 дней<br><span class="card__list-price">13 000 руб</span></label></div>
                                </div>
                                <input type="submit" value="Заказать пропуск" class="btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="discount-system m_b_40">
            <div class="__container">
                    <h2>В нашей компании действует гибкая<br> система скидок </h2>
                    <p class="m_b_40">Оставьте заявку и наши менеджеры предложат Вам оптимальные условия сотрудничества</p>
                    <div class="discount-info d_flex f_col f_gap_35">
                        <div class="discount-choice__list d_flex f_gap_25">
                            <a href="#" class="btn-common btn-active">От 5 автомобилей</a>
                            <a href="#" class="btn-common">От 10 автомобилей</a>
                            <a href="#" class="btn-common">От 15 автомобилей</a>
                        </div>

                        <div class="discount-personal">
                            <form action="" class="discount-personal__form d_flex f_gap_25">
                                <input type="text" placeholder="Введите номер авто" value="">
                                <input type="tel" placeholder="+ 7 (___) ___ __ __" value="">
                                <input type="submit" value="Отправить" class="btn">
                            </form>
                        </div>
                    </div>
            </div>
        </section>
        
        <section class="get-pass m_b_40">
            <div class="__container">
                <div class="howToGet-pass">
                    <h2>Как получить пропуск</h2>
                    <div class="get-pass__info d_flex jc_sb">
                        <div class="get-pass__info-card">
                            <div class="info-card__img-block">
                                <img src="/img/icon-pad.svg" alt="Документы">
                            </div>
                            <p>Вы подготавливаете копии всех<br> необходимых документов: ВУ, ПТС, СТС, ДК</p>
                        </div>
                        <div class="get-pass__info-card">
                            <div class="info-card__img-block">
                                <img src="/img/icon-mail.svg" alt="Документы">
                            </div>
                            <p>Отправляете нам на почту<br> либо в мессенджер</p>
                        </div>
                        <div class="get-pass__info-card">
                            <div class="info-card__img-block">
                                <img src="/img/icon-persone.svg" alt="Документы">
                            </div>
                            <p>Получаете готовый<br> пропуск от 1 до 5 дней!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</body>
</html>