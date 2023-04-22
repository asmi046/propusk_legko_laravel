<header class="p_y_20">
    <div class="__container">
    <div class="header d_flex jc_sb f_a_center">
        <a href="{{route("home")}}" class="header-logo">
            <img src="/img/main-logo.svg" alt="Логотип пропуск легко">
        </a>
        <div class="header-nav">
            <ul class="nav-menu d_flex f_gap_20">
                <x-menu-puncts></x-menu-puncts>
            </ul>
        </div>
        <div class="header-call d_flex f_a_center f_gap_40">
            <a href="tel:{{str_replace(['(',')',' '], '',Config::get('contact.phone'))}}" class="call-number blue_color">{{Config::get('contact.phone')}}</a>
            <a href="#recollMsg" class="btn">Позвоните мне</a>
        </div>

        <div class="icon-menu toggle_menu" aria-label="Бургер меню">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
    </div>
</header>
