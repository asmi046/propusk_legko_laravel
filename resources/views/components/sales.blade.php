<section class="discount-system m_b_40">
    <div class="__container">
            <h2>В нашей компании действует гибкая<br> система скидок </h2>
            <p class="m_b_40">Оставьте заявку и наши менеджеры предложат Вам оптимальные условия сотрудничества</p>
            <div class="discount-info d_flex f_col f_gap_35">
                <div class="discount-choice__list d_flex f_gap_25">
                    <a href="#" class="sales_btn btn-common btn-active">От 5 автомобилей</a>
                    <a href="#" class="sales_btn btn-common">От 10 автомобилей</a>
                    <a href="#" class="sales_btn btn-common">От 15 автомобилей</a>
                </div>

                <div class="discount-personal">
                    <form action="{{route('send_salses')}}" method="POST" class="discount-personal__form d_flex f_gap_25">


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="truck_count" id="truck_count" value="От 5 автомобилей">
                        <input name="name" type="text" placeholder="Введите номер авто" value="">
                        <input name="phone" required type="tel" placeholder="+ 7 (___) ___ __ __" value="">
                        <input type="submit" value="Отправить" class="btn">
                    </form>
                </div>
            </div>
    </div>
</section>
