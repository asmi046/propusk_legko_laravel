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
                        <input type="text" value="Введите номер авто">
                        <input type="submit" value="Заказать пропуск">
                    </form>
                    <p class="white_color">* Проверьте действие вашего пропуска в несколько кликов! Просто введите номерной знак транспортного средства и кликните по кнопке «Проверить».</p>
                </div>
            </div>
        </section>
</body>
</html>