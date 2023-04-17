<section class="type-pass m_b_40">
    <div class="__container">
        <h2>Выберите тип пропуска</h2>
        <div class="type-category d_flex f_col f_gap_35">
            <div class="category-pass d_flex f_gap_25">
                <a href="#" class="btn-common active">Дневной</a>
                <a href="#" class="btn-common ">Ночной</a>
                <a href="#" class="btn-common">Круглосуточный</a>
            </div>

            <div class="category-card d_flex jc_sb f_gap_40">
                @for ($i=0; $i<3; $i++)
                    <x-prop-type></x-prop-type>
                @endfor
            </div>

        </div>
    </div>
</section>
