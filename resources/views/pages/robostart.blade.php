@extends('layouts.master')

@section('content')

<section class="project">

<div class="container">

           <div class="row">
           <div class="col m1">
                                       <img src="assets/img/minirofl2.png" class="rofl2 responsive-img"></img>
                   <img src="assets/img/minirofl1.png" class="rofl1 responsive-img"></img>
           </div>

           <div class="col m3 s4 pads4">
               <img class="responsive-img" src="assets/img/robostartf.png"></img>
               <div class="header_text">
                   <p>Кружок по робототехнике<br>
для детей </p>
               </div>
           </div>
           <div class="col s7">
               <img src="assets/img/logorobo_tel.png" class="imgs4"></img>
               <img src="assets/img/minirofl3.png" class="rofl3 responsive-img"></img>
           </div>












    <div class="pull_last">
        <form class="search_form" action="/search" method="POST">
          {{ csrf_field() }}
          <input class="search_inp" type="text" placeholder="Поиск по сайту" name="search">
          <button class="search_btn" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
          </button>
        </form>
<a href="https://vk.com/aidrussia"><i class="fa  fa-vk" aria-hidden="true" style="    margin-top: 345px;
padding-left: 5px;
font-size: 24px;
padding-bottom: 20px; color:#95969a;"></i></a>
<a href="https://www.facebook.com/ProgrammaItStart/"><i class="fa  fa-facebook" aria-hidden="true" style="padding-left: 11px;
font-size: 24px;
padding-bottom: 20px; color:#95969a;"></i></a>
<a href="https://www.instagram.com/airpressa/"><i class="fa fa-instagram" aria-hidden="true" style="padding-left: 9px;
font-size: 24px;
padding-bottom: 20px; color:#95969a;">
</i></a>

      </div>

</div>

       </div>



</section>
<section class="it_start_1" style="padding-bottom:90px;">


   <div class="row">
       <div class="col offset-l1 l10 m12 s12">

           <h2 class="mero-text" style="    padding-top: 100px;">О ПРОЕКТЕ</h2>

       </div>

       <div class="col l12 m12 s12" style="padding-right: 0;">
           <div class="col offset-l1 l4 m12 s12">
               <p class="its_1">Робототехника для детей — это новый вид занятий, позволяющий вдохновить ребенка вне школы и раскрыть его творческие способности.
</p>
<p class="its_2">Ваш ребенок научится строить различные моторизированные механизмы, разрабатывать программное обеспечение, познакомится с основными принципами механики и робототехники, узнает много нового и интересного.</p>
<p class="its_2">Как и в любом другом деле одному человеку справиться со всеми этапами не очень просто, поэтому мы стремимся заниматься разработкой роботов в дружном коллективе, где Ваш ребенок сможет найти свое место и быть востребованным и полезным участником. В одном проекте он может выступить как инженер-конструктор, в следующем — в роли программиста либо ученого, и он будет анализировать задачи и разрабатывать проектную документацию.</p>


                  <div class="col l12 m12 s12" style="padding-top:30px; padding-left: 0;     padding-bottom: 10px;" >
                      <a href="#zapis" class="waves-effect waves-light btn btn_project_2_its">ЗАПИСАТЬСЯ</a>
                  </div>

           </div>



           <div class="col offset-l1 l6 m12 s12" style="padding-right: 0;">
               <div class="back_it_start">
                 <img class="responsive-img fruy_its_start" src="assets/img/robo_right.png">
                 <img class="responsive-img liniya_clas" src="assets/img/liniya_ist.png">
                 <p class="s_liniey">Откройте для Вашего ребенка <br>
интереснейший мир <br>
робототехники, мир новых <br>
знаний, мир фантазий, мир <br>
будущего!</p>
               </div>
           </div>
       </div>
   </div>



</section>


<section class="tri_robota">
<div class="container">
   <div class="row">
       <div class="col l4 m12 s12">
       <div class="card card_rob center">
       <div class="card-content white-text">
         <span class="card-title"><img class="responsive-img" src="assets/img/jir1.png"></span>
         <p class="v_v">Робототехника - это наиболее интенсивно развивающийся вариативный курс в системе дополнительного образования детей</p>
       </div>
     </div>
     </div>

      <div class="col l4 m12 s12">
       <div class="card card_rob center">
       <div class="card-content white-text">
         <span class="card-title"><img class="responsive-img" src="assets/img/jir2.png"></span>
         <p class="v_v">Участие в творческих  и проектировочных видах деятельности, поощряющих любовь к науке, технологиям  и технике с раннего возраста</p>
       </div>
     </div>
     </div>

      <div class="col l4 m12 s12">
       <div class="card card_rob center">
       <div class="card-content white-text">
         <span class="card-title"><img class="responsive-img" src="assets/img/jir3.png"></span>
         <p class="v_v">Занятия в группе робототехники позволяют детям попробовать свои силы в инженерной профессии и получить навыки в сфере робототехники с юных лет</p>
       </div>
     </div>
     </div>
   </div>
</div>
</section>


    <section class="stoim_obuch">
       <div class="container">
           <div class="row">
              <div class="l12 m12 s12">
                   <h2 class="its_poik_rob">СТОИМОСТЬ ОБУЧЕНИЯ</h2>
              </div>

               <div class="col l6 m12 s12 center">
                   <p class="rob_e_1">Для детей в возрасте 7-9 лет </p>
                   <p class="rob_e_2"><span class="rob_e_3">3000</span><br>рублей / в месяц</p>
                   <p class="rob_e_4">4 занятия по 1 часу</p>
               </div>

               <div class="col l6 m12 s12 center">
                   <p class="rob_e_1">Для детей в возрасте 10-14 лет</p>
                   <p class="rob_e_2"><span class="rob_e_3">4500</span><br>рублей / в месяц</p>
                   <p class="rob_e_4">8 занятий по 1,5 часа</p>
               </div>
           </div>
       </div>
   </section>

   <section>

           <div class="row">
               <div class="col l6 m12 s12 rob_v">
                   <p class="rob_e_5">В рамках увлекательных занятий, дети научатся программировать контроллеры, собирать конструкторы различной степени сложности, управлять квадрокоптерами, работать на современном оборудовании фаблаба, в том числе пользоваться 3d принтерами, узнают много нового о современных технологиях «интернет вещей» и многое другое. Помимо занятий, детей ждут познавательные экскурсии в ведущие IT компании и инновационные центры, а так же участие в соревнованиях и открытых тренировках!</p>
               </div>

               <div class="col l6 m12 s12">
                   <p class="rob_e_6 e_6">Занятия проводятся в малых группах: <br> <span class="rob_e_7">10-15 человек!</span></p>
                   <p class="rob_e_6">На летний период занятия стартуют по факту набора группы.</p>
                   <p class="rob_e_6">Осенью занятия начинаются  <span  class="rob_e_7">2 сентября</span></p>
               </div>
           </div>

   </section>


   <section class="forma_pub_22">

       <div class="container">
           <div class="row">
               <div class="col l12 m12 s12">
                   <h2 class="its_poik">Хотите получать актуальную инормацию<br>
о проекте IT-Start Hackathone?</h2>
<h2 class="its_poik_2">Подпишитесь на нашу рассылку</h2>
               </div>

              <form action="/podpiska" method="POST">
         {{ csrf_field() }}
        <div class="col l6 m12 s12">
        <input placeholder="Напишите свой E-mail" id="email"   name='email' type="email" class="validate foot_form_1" required>
      </div>
                 <div class="col s12 l4 m4" style="padding-left: 0px;">
          {!! app('captcha')->display() !!}
                     
        </div>
      <div class="col l12 m12 s12" style="    padding-top: 60px;     padding-bottom: 75px;">
        <button type="submit" class="waves-effect waves-light btn btn_project_2_its">ПОДПИСАТЬСЯ</button>
      </div>
      </form>
           </div>
       </div>
   </section>

           <section class="forma_rob_22" id="zapis">

       <div class="container">
           <div class="row">
               <div class="col l12 m12 s12">
                   <h2 class="its_poik">Желаете достойного будущего <br>
своему ребенку?</h2>
<h2 class="pub_poik_2">запишите его на кружок робототехники уже сейчас!</h2>
               </div>
<form action="/krujokrobo" method="POST">
                     {{ csrf_field() }}
             <div class="col l12 m12 s12">
                  <div class="col l6 m12 s12 muntis">
                  <input placeholder="Фамилия Имя" id="first_name" name="imya_fa" type="text" class="validate foot_form_pub" required>
              </div>

              <div class="col l6 m12 s12 muntis">
                  <input placeholder="Возраст ребенка" id="first_name" name="fozrst" type="text" class="validate foot_form_pub" required>
              </div>
             </div>



              <div class="col l12 m12 s12">
                  <div class="col l6 m12 s12 muntis">
                  <input placeholder="E-mail" id="first_name" name="email" type="email" class="validate foot_form_pub" required>
              </div>

              <div class="col l6 m12 s12 muntis">
                  <input placeholder="Телефон" id="first_name" name="phone" type="text" class="validate foot_form_pub" required>
              </div>
             </div>

              <div class="col l12 m12 s12" style="    padding-top: 60px;     padding-bottom: 75px;     padding-right: 30px;">
                  <button type="submit" class="waves-effect waves-light btn btn_project_2_rob right">ОТПРАВИТЬ</button>
              </div>
              </form>
           </div>
       </div>
   </section>


@endsection
