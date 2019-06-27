
  <!-- ################################################################################################ -->
@extends('layouts.master')

@section('content')
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  
 
  
 


<section class="">

   <div class="container" style="background: #e8e8e8;">

                <div class="row">
                
                
               
                 
         <div class="pull_last_even right">
       <form class="search_form cuk" action="/search" method="POST">
          {{ csrf_field() }}
          <input class="search_inp cuk1" type="text" placeholder="Поиск по сайту" name="search">
          <button class="search_btn cuk2" type="submit"><i class="fa fa-2x fa-search" aria-hidden="true"></i>
          </button>
        </form>
<div class="col l12 s12 m12">
    <a href="https://vk.com/aidrussia"><i class="fa  fa-vk cuk4" aria-hidden="true"></i></a>
<a href="https://www.facebook.com/ProgrammaItStart/"><i class="fa  fa-facebook cuk5" aria-hidden="true"></i></a>
<a href="https://www.instagram.com/airpressa/"><i class="fa fa-instagram cuk6" aria-hidden="true">
    </i></a>
</div>

           </div>   
                
    </div>
            
            </div>         
            


</section>

        

<section style="overflow:hidden;">
    <div class="container">
        <div class="row">
            <div class="col l12 s12 m12 urururu">
                <img src="/storage/{{ $solo->image }}" class="kupola_zol">
            </div>
            
            
            
            <div class="col l7 m12 s12">
            <div class="iyfhd"><p class="blivota1">{!! $solo->body !!}</p></div>
            <div class="pipol">
                <p class="blivota3">{!! $solo->zayavka !!}</p>
            </div>
            
            
            </div>
            
            
            <div class="col l5 s12 m12 hihi">
                <div class="col s2 iii">
                    <img src="assets/img/hy1.png" class="responsive-img ht1">
                </div>
                <div class="col s2 iii">
                    <img src="assets/img/hy2.png" class="responsive-img ht2">
                </div>
                <div class="col s2 iii">
                    <img src="assets/img/hy3.png" class="responsive-img ht3">
                </div>
                <p class="pikona">{!! $solo->date !!}</p>
                <p class="pikona2">{!! $solo->title !!} {{ $solo->minibody }}</p>

<a href="#fuy" class="waves-effect waves-light btn pull_btn_1 kikikikikikikiki class{{ $solo->formaregi }}">УЧАСТВОВАТЬ</a>

                    <img src="assets/img/hy4.png" class="responsive-img ht4">
                <img src="assets/img/hy5.png" class="responsive-img ht5">
                <img src="assets/img/hy6.png" class="responsive-img ht6">
                <img src="assets/img/hy7.png" class="responsive-img ht7">
                
            </div>
            
        </div>
    </div>
</section>


 <section class="class{{ $solo->formaregi  }}" id="fuy">
            
            <div class="container">
                <div class="row">
                    <div class="col l12 m12 s12">
                        <h2 class="its_poik">Чтобы принять участие, заполните <br>
форму-заявку ниже.</h2>
                    </div>
                    <form action="/eventsoloform" method="POST">
                     {{ csrf_field() }}
                  <div class="col l12 m12 s12">
                       <div class="col l6 m12 s12 muntis">
                       <input placeholder="Имя" id="first_name"  name="name" type="text" class="validate foot_form_pub" required>
                   </div> 
                   
                   <div class="col l6 m12 s12 muntis">
                       <input placeholder="Фамилия" id="first_name" name="famil" type="text" class="validate foot_form_pub" required>
                   </div>
                  </div>
                  
                 
                  
                   <div class="col l12 m12 s12">
                       <div class="col l6 m12 s12 muntis">
                       <input placeholder="E-mail" id="first_name" name="email" type="email" class="validate foot_form_pub" required>
                   </div> 
                   
                   <div class="col l6 m12 s12 muntis">
                       <input placeholder="Телефон" id="first_name" type="tel" name="tel" class="validate foot_form_pub" required>
                   </div>
                   
                   <div class="col l6 m12 s12 muntis" style="display:none;">
                       <input placeholder="Телефон" id="first_name" type="tel1" name="tel1" class="validate foot_form_pub" value="{!! $solo->title !!}">
                   </div>
                  </div>
                  
                  
                  
                  
                  <div class="col l12 m12 s12">
                       <div class="col l12 m12 s12 muntis1">
                       <textarea placeholder="Текст сообщения" id="textarea1" name="message2" class="validate nu_kogada_uj" required></textarea >
                   </div> 
                  </div>
                  
                  <div class="col l6 m12 s12" style="    padding-top: 70px;     padding-bottom: 75px;     padding-right: 30px;">
                       <p class="piz1">Ваша заявка на участия в мероприятии будет рассмотрена в ближайшее время после отправки данной формы. Мы свяжемся с Вами, чтобы подтвердить Ваше участие.</p>
                   </div>
              
                   <div class="col l6 m12 s12" style="    padding-top: 80px;     padding-bottom: 75px;     padding-right: 30px;">
                       <button type="submit" class="waves-effect waves-light btn btn_project_2_rob right">ОТПРАВИТЬ</button>
                   </div>
                   </form>
                   
                </div>
            </div>
        </section>
        
  
  @endsection