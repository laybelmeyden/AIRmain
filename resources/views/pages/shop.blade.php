@extends('layouts.master')

@section('content')

    <div class="container">
    <div class="row">
    <div class="col l12 s12 m12">
      <h2 class="its_poik_rob">СЕРТИФИКАТЫ</h2>
    </div>  
    <div class="col l12 s12 m12 item__shop__card">
    <div class="card horizontal pop_edu_v_magadan">
    <div class="card-image gover">
      <img class="materialboxed shop__img__item" src="assets/img/Sertifikat2.jpg">
    </div>
    <div class="card-stacked giti">
    <div class="card-content">
      <p class="magad2">Электронный сертификат</p>
      <p class="magad1">от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»</p>
      <p class="shop__p__item">Стоимость: 300 рублей</p>
      <a class="btn_magad btn modal-trigger"  href="#modalshop">Заказать</a>
    </div>
    </div>
    </div>
    
    <form action="/shopform" method="POST" id="form__suc__one">
    {{ csrf_field() }}
    <!-- Modal Structure -->
    <div id="modalshop" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="shop_fio" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
    <div class="col s12 item__shop__form">
      <label>Год рождения</label>
      <select name="shop_select" required>
      <option value="" disabled selected>Выберите Ваш год рождения</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      </select>
    </div>
    <div class="col s12 item__shop__form">
      <label>Мероприятия</label>
      <select name="shop_select_2" required>
      <option value="" disabled selected>Выберите мерипроятие в котором вы планируете участвовать</option>
      <option value="Стартап-школа ЮФО">Стартап-школа ЮФО</option>
      <option value="Стартап-школа ПФО">Стартап-школа ПФО</option>
      <option value="Стартап-школа ЦФО">Стартап-школа ЦФО</option>
      <option value="Стартап-школа СЗФО">Стартап-школа СЗФО</option>
      <option value="Стартап-школа УФО">Стартап-школа УФО</option>
      <option value="Стартап-школа СФО">Стартап-школа СФО</option>
      <option value="Стартап-школа ДФО">Стартап-школа ДФО</option>
      <option value="Стартап-школа СКФО">Стартап-школа СКФО</option>
      </select>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="email" type="email" class="validate" required>
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш телефон" id="first_name" name="phone" type="text" class="validate" required>
      <label for="first_name">Номер для связи</label>
      </div>
      <div class="input-field col s12 item__shop__form hidden">
      <input id="first_name" name="hidden_item" type="text" class="validate" value="Электронный сертификат

от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»">
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <button id="op1" type="submit" class="waves-effect btn_magad btn">Перейти к оплате</button>
    </div>
    </div>
    </form>
    </div>
    <!---->
    <div class="col l12 s12 m12 item__shop__card">
    <div class="card horizontal pop_edu_v_magadan">
    <div class="card-image gover">
      <img class="materialboxed shop__img__item" src="assets/img/Sertifikat2.jpg">
    </div>
    <div class="card-stacked giti">
    <div class="card-content">
      <p class="magad2">Электронный и бумажный сертификат</p>
      <p class="magad1">от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»</p>
      <p class="shop__p__item">Стоимость: 500 рублей</p>
      <a class="btn_magad btn modal-trigger"  href="#modalshop2">Заказать</a>
    </div>
    </div>
    </div>
    
    <form action="/shopform2" method="POST" id="form__suc__two">
    {{ csrf_field() }}
    <!-- Modal Structure -->
    <div id="modalshop2" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="shop_fio" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
    <div class="col s12 item__shop__form">
      <label>Год рождения</label>
      <select name="shop_select" required>
      <option value="" disabled selected>Выберите Ваш год рождения</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      </select>
    </div>
    <div class="col s12 item__shop__form">
      <label>Мероприятия</label>
      <select name="shop_select_2" required>
      <option value="" disabled selected>Выберите мерипроятие в котором вы планируете участвовать</option>
      <option value="Стартап-школа ЮФО">Стартап-школа ЮФО</option>
      <option value="Стартап-школа ПФО">Стартап-школа ПФО</option>
      <option value="Стартап-школа ЦФО">Стартап-школа ЦФО</option>
      <option value="Стартап-школа СЗФО">Стартап-школа СЗФО</option>
      <option value="Стартап-школа УФО">Стартап-школа УФО</option>
      <option value="Стартап-школа СФО">Стартап-школа СФО</option>
      <option value="Стартап-школа ДФО">Стартап-школа ДФО</option>
      <option value="Стартап-школа СКФО">Стартап-школа СКФО</option>
      </select>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="email" type="email" class="validate" required>
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш телефон" id="first_name" name="phone" type="text" class="validate" required>
      <label for="first_name">Номер для связи</label>
      </div>
      <div class="input-field col s12 item__shop__form hidden">
      <input id="first_name" name="hidden_item" type="text" class="validate" value="Электронный и бумажный сертификат

от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства»">
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, тематика мастер-классов, количество часов – 24. Сертификат будет отправлен на электронную почту, указанную при покупке, в течение 5 рабочих дней после участия в мероприятии.</p>
    </div>
    <div class="modal-footer">
      <button id="op2" type="submit" class="waves-effect btn_magad btn">Перейти к оплате</button>
    </div>
    </div>
    </form>
    </div>
    <!---->
    <div class="col l12 s12 m12 item__shop__card">
    <div class="card horizontal pop_edu_v_magadan">
    <div class="card-image gover">
      <img class="materialboxed shop__img__item" src="assets/img/Sertifikat.jpg">
    </div>
    <div class="card-stacked giti">
    <div class="card-content">
      <p class="magad2" style="font-size: 20px;">Сертификат о дополнительном образовании от ведущего московского вуза (Национальный исследовательский университет «Московский авиационный институт»)</p>
      <p class="magad1">о прохождении курса обучения по программе «Основы технологического предпринимательства» </p>
      <p class="shop__p__item">Стоимость: 4300 рублей</p>
      <a class="btn_magad btn modal-trigger"  href="#modalshop3">Заказать</a>
    </div>
    </div>
    </div>
    
      <form action="/shopform3" method="POST" id="form__suc__three">
    {{ csrf_field() }}
    <!-- Modal Structure -->
    <div id="modalshop3" class="modal modal_shop">
    <div class="modal-content">
    <h4>Заказать сертификат</h4>
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="shop_fio" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
    <div class="col s12 item__shop__form">
      <label>Год рождения</label>
      <select name="shop_select" required>
      <option value="" disabled selected>Выберите Ваш год рождения</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      </select>
    </div>
    <div class="col s12 item__shop__form">
      <label>Мероприятия</label>
      <select name="shop_select_2" required>
      <option value="" disabled selected>Выберите мерипроятие в котором вы планируете участвовать</option>
      <option value="Стартап-школа ЮФО">Стартап-школа ЮФО</option>
      <option value="Стартап-школа ПФО">Стартап-школа ПФО</option>
      <option value="Стартап-школа ЦФО">Стартап-школа ЦФО</option>
      <option value="Стартап-школа СЗФО">Стартап-школа СЗФО</option>
      <option value="Стартап-школа УФО">Стартап-школа УФО</option>
      <option value="Стартап-школа СФО">Стартап-школа СФО</option>
      <option value="Стартап-школа ДФО">Стартап-школа ДФО</option>
      <option value="Стартап-школа СКФО">Стартап-школа СКФО</option>
      </select>
    </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш e-mail" id="first_name" name="email" type="email" class="validate" required>
      <label for="first_name">Ваша почта, на данный адрес будет отправлен электронный сертифика</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш почтовый адрес" id="first_name" name="email_adres" type="text" class="validate" required>
      <label for="first_name">Ваш почтовый адрес, на данный адрес будет отправлен сертификат заказным письмом</label>
      </div>
      <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите ваш телефон" id="first_name" name="phone" type="text" class="validate" required>
      <label for="first_name">Номер для связи</label>
      </div>
      <div class="input-field col s12 item__shop__form hidden">
      <input id="first_name" name="hidden_item" type="text" class="validate" value="Сертификат о дополнительном образовании от ведущего московского вуза (Национальный исследовательский университет «Московский авиационный институт»)

о прохождении курса обучения по программе «Основы технологического предпринимательства»">
      </div>
    </div>
      <p>* В сертификате указывается ФИО получателя, даты прохождения курса, количество часов – 24. Сертификат будет отправлен по почтовому адресу, указанному при регистрации заказным письмом в срок до 10 июня 2019 года. Стоимость почтовой отправки включена в стоимость сертификата.</p>
    </div>
    <div class="modal-footer">
      <button id="op3" type="submit" class="waves-effect btn_magad btn">Перейти к оплате</button>
    </div>
    </div>
    </form>
    </div>
          <p class="center">Полное наименование: Автономная некоммерческая организация «Агентство инновационного развития» <br>

Сокращенное наименование: АНО «АИР». <br>
Юридический адрес: 105425, г. Москва, Сиреневый бульвар, 12 корп. 1 Почтовый адрес 115088, г. Москва, <br>
ул. 2-я Машиностроения, <br>
25 строение «5» оф. 412 <br>
ИНН 7719289634 КПП 771901001 <br>
ОГРН 1127799006323 <br>
Расчетный счет №40703810201500000158 <br>
Название банка: ТОЧКА ПАО БАНКА "ФК ОТКРЫТИЕ" г. Москва <br>
БИК: 044525999 Корр. счет: 30101810845250000999 <br>
info@rusinnovations.com</p>
<p class="center">Правила и условия оказания услуг , а так же порядок возврата денежных средств при отмене покупки<a href="https://vk.com/doc22052708_493522097?hash=b9009d26310ce5afbd&dl=e38395ca1668652197" target="_blank" class="shop__item__href">(договор публичной оферты)</a></p>

    </div>
    </div>
@endsection
