@extends('layouts.master')

@section('content')

    <div class="container">
    <div class="row">
    <div class="col l12 s12 m12">
      <h2 class="its_poik_rob">ОПЛАТА</h2>
    </div>  
    <div class="col l12 s12 m12 item__shop__card">
    <form action="https://money.yandex.ru/eshop.xml" method="post">
    {{ csrf_field() }}
    <input name="shopId" value="131650" type="hidden" required/>
    <input name="scid" value="905333" type="hidden" required/>
    <input name="sum" value="300" type="hidden" required>
        <!-- Modal Structure -->
    <div class="form">
    <div class="input-field col s12 item__shop__form">
      <input placeholder="Введите Ваше ФИО" id="first_name" name="customerNumber" type="text" class="validate" required>
      <label for="first_name">ФИО</label>
    </div>
      <div class="input-field col s12 item__shop__form">
        <textarea id="textarea1" class="materialize-textarea validate" name="orderDetails" type="text">Электронный сертификат от Агентства инновационного развития о прохождении курса обучения по программе «Основы технологического предпринимательства» </textarea>
        <label for="textarea1">Проверьте правильность выбора сертификата</label>
      </div>
    </div>
      <input type="submit" class="btn_magad oplata__btn__item" value="Заказать">
    </form>
    </div>
    </div>
    </div>
@endsection
