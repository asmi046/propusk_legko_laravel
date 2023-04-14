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

    <x-header></x-header>

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
                        <div class="category-card__list border_block">
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

                        <div class="category-card__list border_block">
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

                        <div class="category-card__list border_block">
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
                <div class="howToGet-pass gray_bg">
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

        <section class="necessary-document m_b_40">
            <div class="__container">
                <h2>Список необходимых документов</h2>
                <div class="need-document d_flex f_gap_30">
                    <div class="need-document__list border_block d_flex f_col">
                        <img src="/img/pts-img.png" alt="ПТС пример документа">
                        <div class="need-document__list-info">
                        <p><span class="list-info__abbr">ПТС</span></p>
                        <p class="abbr-transcript">Паспорт технического средства</p>
                        <p>Необходимо отсканировать обе стороны документа в развороте!</p>
                        </div>
                    </div>

                    <div class="need-document__list border_block d_flex f_col">
                        <img src="/img/sts-img.png" alt="СТС пример документа">
                        <div class="need-document__list-info">
                        <p><span class="list-info__abbr">СТС</span></p>
                        <p class="abbr-transcript">Свидетельство о Регистрации Технического Средства</p>
                        <p>Необходимо отсканировать обе стороны документа!</p>
                        </div>
                    </div>

                    <div class="need-document__list border_block d_flex f_col">
                        <img src="/img/diagnostic-img.png" alt="Диагностическая карта пример документа">
                        <div class="need-document__list-info">
                        <p><span class="list-info__abbr">Диагностическая Карта</span></p>
                        <p class="abbr-transcript"></p>
                        <p>У диагностической карты должен быть корректный срок действия</p>
                        </div>
                    </div>

                    <div class="need-document__list border_block d_flex f_col">
                        <img src="/img/driver_udost-img.png" alt="Водительское удостоверение пример документа">
                        <div class="need-document__list-info">
                        <p><span class="list-info__abbr">Водительское удостоверение</span></p>
                        <p class="abbr-transcript"></p>
                        <p>Необходимо отсканировать обе стороны документа</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="driving-rules m_b_40">
            <div class="__container">
                <h2>Правила проезда грузового транспорта на<br> территорию Москвы и области</h2>
                <div class="rules-block d_flex jc_sb">
                    <div class="rules-block__list d_flex f_col border_block">
                        <img src="/img/1t-car.svg" alt="Грузовая машина свыше 1 тонны">
                        <p>Транспорт с грузоподъемностью свыше 1 тонны не может заезжать в зону ТТК и СК с 7:00 до 23:00 ежедневно, необходим пропуск. Въезжать в эти зоны разрешено только автомобилям, чей экологический класс соответствует Евро 3, не ниже</p>
                    </div>

                    <div class="rules-block__list d_flex f_col border_block">
                        <img src="/img/3,5t-car.svg" alt="Грузовая машина свыше 1 тонны">
                        <p>Если разрешенная масса грузового автомобиля выше 3.5 тонны, ему запрещается въезжать на МКАД с 7:00 до 23:00. При этом, экологический класс машины должен соответствовать Евро 2, не ниже.</p>
                    </div>

                    <div class="rules-block__list d_flex f_col border_block">
                        <img src="/img/cctv.svg" alt="Грузовая машина свыше 1 тонны">
                        <p>Нарушая установленные правила, владелец грузовика будет оштрафован. Камеры, регистрирующие правонарушения, фиксируют номера авто и сверяют их с базой данных. Штрафы начисляются за каждое попадание номеров на камеру видеонаблюдения. За день можно получить неограниченное количество штрафов по 5000 рублей.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="our-advantages m_b_40">
            <div class="__container">
                <div class="advantages gray_bg">
                    <h2>Наши преимущества</h2>
                    <div class="advantages-info d_flex jc_sb">
                        <div class="advantages-info__list d_flex">
                            <div class="list-number"><span>1</span></div>
                            <div class="list-text">
                                <p>Поможем оформить разовый пропуск за 2 дня</p>
                            </div>
                        </div>

                        <div class="advantages-info__list d_flex">
                            <div class="list-number"><span>2</span></div>
                            <div class="list-text">
                                <p>Работаем без предоплаты</p>
                            </div>
                        </div>

                        <div class="advantages-info__list d_flex">
                            <div class="list-number"><span>3</span></div>
                            <div class="list-text">
                                <p>Бесплатные разовые пропуска при заказе годового</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
