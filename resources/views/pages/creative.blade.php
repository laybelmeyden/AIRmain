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
                   <img class="responsive-img" src="assets/img/air_cr.png"></img>
                   <div class="header_text">
                       <p>Digital и дизайн-студия<br>
Air Creative Group</p>
                   </div>
               </div>
               <div class="col s7">
                   <img src="assets/img/air_creag.png" class="imgs4"></img>
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
                   <p class="its_1">Агентство инновационного развития в рамках проекта Air Creative Group предоставляет услуги по разработке фирменного стиля, рекламной продукции и веб-сайтов любой сложности. </p>
<p class="its_2">Фирменный стиль является одним из главных инструментов в позиционировании компании, служит для ведения коммуникации с внешним миром, а также призван выделять уникальность компании среди конкурентов. Фирменный стиль компании – это совокупность графических, цветовых, словесных элементов, которые обеспечивают смысловое единство бренда.
<br>
Сайт - это один из эффективных маркетинговых инструментов для своих владельцев.<br>
Web-технологии сегодняшнего дня дают возможность отражать на сайте самый разнообразный вид деятельности Вашей компании, создавать эффективные инструменты для ведения бизнеса, а также дают возможность для улучшения производительности труда.</p>


                      <div class="col l12 m12 s12" style="padding-top:30px; padding-left: 0;     padding-bottom: 10px;" >
                          <a href="#zakaz" class="waves-effect waves-light btn btn_project_2_its">ЗАКАЗАТЬ ПРОЕКТ</a>
                      </div>

               </div>



               <div class="col offset-l1 l6 m12 s12" style="padding-right: 0;">
                   <div class="back_it_start">
                     <img class="responsive-img fruy_its_start" src="assets/img/air_crop.png">
                     <img class="responsive-img liniya_clas" src="assets/img/sin2.png">
                     <p class="s_liniey">Позвольте своему бизнесу быть <br>
полезным уже сегодня. </p>
                   </div>
               </div>
           </div>
       </div>



</section>


<section class="tri_robota">
   <div class="container">
       <div class="row">
           <div class="col l4 m12 s12">
           <div class="card card_rob_1 center">
           <div class="card-content white-text">
             <span class="card-title"><img class="responsive-img" src="assets/img/jir4.png"></span>
             <p class="v_v">Разработка логотипа и фирменного стиля. Создание брендбука, который включает фирменный цвета и шрифты, визуальные примеры правильного и неправильного использования элементов фирменного стиля, шаблоны корпоративных носителей фирменного стиля: визитки, презентация, бланки, папки и т.д.</p>
           </div>
         </div>
         </div>

          <div class="col l4 m12 s12">
           <div class="card card_rob_1 center">
           <div class="card-content white-text">
             <span class="card-title"><img class="responsive-img" src="assets/img/jir5.png"></span>
             <p class="v_v">Разработка рекламных материалов, для сопровождения бренда, акций, мероприятий. Создание дизайна полиграфии любой сложности: визитки, листовки, буклеты, баннеры, постеры, брошюры, каталоги, сувенирная продукция и т.д. </p>
           </div>
         </div>
         </div>

          <div class="col l4 m12 s12">
           <div class="card card_rob_1 center">
           <div class="card-content white-text">
             <span class="card-title"><img class="responsive-img" src="assets/img/jir6.png"></span>
             <p class="v_v">Создание сайтов любой сложности. Мы разрабатываем и сопровождаем сайты визитки, корпоративные сайты, многостраничные информационные ресурсы, интернет магазины, лендинги. Специалисты студии используют новейшие технологии и последние тенденции в создании качественных и продающих ресурсов. </p>
           </div>
         </div>
         </div>
       </div>
   </div>
</section>

<section id="portfolio" class="lutshie_keysi">
       <div class="container">
         <div class="row">

         <div class="col l12 s12 m12" style="    padding-bottom: 10px;"><h2 class="its_poik_rob">ЛУЧШИЕ КЕЙСЫ</h2></div>


         <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k1.png" class="propal_mk ">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка фирменного стиля<br>
и брендбука для Финансовго <br>
университета при Правительстве<br>
Российской Федарации</p>
<a href="#modall1" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>

           <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k2.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка фирменного стиля <br>
для Телекомтура от МТС в <br>
Южную Корею 2016.</p>
<a href="#modall2" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>



       <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k3.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка фирменного стиля <br>
Летней школы HSE {SUN} <br>
Высшей школы экономики.</p>
<a href="#modal1" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>

         <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k4.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка фирменного стиля<br>
и брендирование мероприятия <br>
НАЧНИ-IT.</p>
<a href="#modall3" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>


           <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k5.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка дизайна <br>
Информационно-методического <br>
сборника в помощь донорскому <br>
движению</p>
<a href="#modall4" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>



           <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k6.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка логотипа и <br>
фирменного стиля мероприятия <br>
BIO SATRT — стартапы в области <br>
биотехнологий</p>
<a href="#modall5" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>



         <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k7.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка сайта для вестника<br>
Избирательной комиссии <br>
Самарской области</p>
<a href="#modall6" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>


         <div class="col l4 m12 s12 banana">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k8.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Брендирование мероприятия <br>
Star-up Tour Israel 2015</p>
<a href="#modall7" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>


         <div class="col l4 m12 s12 banana" style="    padding-bottom: 80px;">
               <ul class="project-wrapper">
             <li class="portfolio-item">
               <img src="assets/img/k9.png" class="propal_mk">
               <figcaption class="mask">
                 <p class="navaliniy">Разработка фирменного стиля<br>
для Всероссийской программы<br>
IT-START  HACKATHON
</p>
<a href="#modall8" class="btn super_mario_p">СМОТРЕТЬ</a>

               </figcaption>
             </li>
           </ul>
         </div>

         </div>
       </div>
     </section>
 <!--modal-->
  <div id="modal1" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">ЛЕТНЯЯ ШКОЛА HSE {SUN}</h4>
     <p class="modal_hed_1">Разработка фирменного стиля Летней школы HSE {SUN} Высшей школы экономики.
Брендирование мероприятия  Высшей школы экономики — Летней школы HSE {SUN} 2016.
Создание фирменного рисунка, дизайн всей сопутствующей продукции.</p>

<img class="responsive-img materialboxed" src="assets/img/m1.png">
<img class="responsive-img materialboxed" src="assets/img/m2.png">
<img class="responsive-img materialboxed" src="assets/img/m3.png">
<img class="responsive-img materialboxed" src="assets/img/m4.png">
   </div>
 </div>
 
 
   <div id="modall1" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">ФИНАНСОВЫЙ УНИВЕРСИТЕТ</h4>
     <p class="modal_hed_1">Разработка фирменного стиля для Финансового Университета при Правительстве Российской Федерации.
Создание логотипа и элементов фирменного стиля: фирменных шрифтов, фирменных цветов.
Нанесение разработанных элементов фирменного стиля на основные рекламные носители, сувенирную продукцию, полиграфию.
Разработка брендбука — руководства по использованию фирменного стиля.</p>

<img class="responsive-img materialboxed" src="assets/img/l1.jpg">
<img class="responsive-img materialboxed" src="assets/img/l2.jpg">
<img class="responsive-img materialboxed" src="assets/img/l3.jpg">
<img class="responsive-img materialboxed" src="assets/img/l4.jpg">
<img class="responsive-img materialboxed" src="assets/img/l5.jpg">
   </div>
 </div>
 
 <div id="modall2" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">ТЕЛЕКОМТУР 2016. ЮЖНАЯ КОРЕЯ</h4>
     <p class="modal_hed_1">Брендирование образовательного тура в Южную Корею от МТС.
Разработка дизайна полиграфии и рекламной продукции:<br>
бейджи<br>
сертификаты<br>
брошюра с программой<br>
брошюра с памяткой для участников тура<br>
книга отзывов<br>
флаг</p>

<img class="responsive-img materialboxed" src="assets/img/l6.jpg">
<img class="responsive-img materialboxed" src="assets/img/l7.jpg">
   </div>
 </div>
 
  <div id="modall3" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">НАЧНИ-IT. ВСЕРОССИЙСКАЯ ПРОФИЛЬНАЯ СМЕНА</h4>
     <p class="modal_hed_1">Брендирование Всероссийской профильной смены в сфере информационных технологий и робототехники.
Разработка общей концепции фирменного стиля мероприятия.
Разработка дизайна рекламной, сувенирной и полиграфической продукции:<br>
дипломы и сертификаты<br>
бейджи<br>
блокнот<br>
ролл-ап<br>
значки<br>
футболка<br>
пакет<br>
ручка</p>

<img class="responsive-img materialboxed" src="assets/img/l8.jpg">
<img class="responsive-img materialboxed" src="assets/img/l9.jpg">
<img class="responsive-img materialboxed" src="assets/img/l10.jpg">
   </div>
 </div>
 
 <div id="modall4" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">НАЦИОНАЛЬНЫЙ ФОНД РАЗВИТИЯ ЗДРАВООХРАНЕНИЯ. СБОРНИК</h4>
     <p class="modal_hed_1">Разработка концепции дизайна страниц сборника;
верстка сборника;
подбор иллюстративного материала;
разработка графического материала и инфографики;
допечатная подготовка</p>

<img class="responsive-img materialboxed" src="assets/img/l11.jpg">
<img class="responsive-img materialboxed" src="assets/img/l12.jpg">
   </div>
 </div>
 
 <div id="modall5" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">BIO START. СТАРТАПЫ В ОБЛАСТИ БИОТЕХНОЛОГИЙ.</h4>
     <p class="modal_hed_1">Логотип состоит из графической и шрифтовой части. Графическая часть логотипа выполнена в виде стилизованной цепочки ДНК, а также имеет начертание лабораторных пробирок (вид сверху). В графическую часть вписаны буквы текстовой части в трех кругах BIO. Средний круг графической части образовывает вместе с буквой “I” кнопку пуск/старт. Цветовое решение логотипа и фирменного стиля обусловлено тематикой мероприятия и местом его проведения.</p>

<img class="responsive-img materialboxed" src="assets/img/l13.jpg">
<img class="responsive-img materialboxed" src="assets/img/l14.jpg">
<img class="responsive-img materialboxed" src="assets/img/l15.jpg">
   </div>
 </div>
 
 <div id="modall6" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">АГЕНТСТВО ИННОВАЦИОННОГО РАЗВИТИЯ. 
WEB-САЙТ</h4>
     <p class="modal_hed_1">Разработка сайта для IT-Start:<br>
RUSINNOVATIONS.COM<br>
проектирование и  разработка уникального дизайна;<br>
верстка и программирование;<br>
интеграция верстки в CMS</p>

<img class="responsive-img materialboxed" src="assets/img/l16.jpg">
<img class="responsive-img materialboxed" src="assets/img/l17.jpg">
   </div>
 </div>
 
  <div id="modall7" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">STAR-UP TOUR ISRAEL 2015. БРЕНДИРОВАНИЕ.</h4>
     <p class="modal_hed_1">Разработка фирменного стиля для Star-up Tour Israel 2015.
Разработка общей визуальной концепции.
Разработка рекламных материалов и сопровождающей полиграфии:<br>
ролл-ап<br>
сертификат<br>
бейджи участников и организаторов<br>
афиша<br>
флаг</p>

<img class="responsive-img materialboxed" src="assets/img/l18.jpg">
<img class="responsive-img materialboxed" src="assets/img/l19.jpg">
<img class="responsive-img materialboxed" src="assets/img/l20.jpg">
   </div>
 </div>
 
 <div id="modall8" class="modal pop_modal">
   <div class="modal-content">
     <h4 class="modal_hed">
Разработка landing page для IT-start Hackathon</h4>
     <p class="modal_hed_1">Разработка landing page для хакатона по программированию в рамках всероссийских соревнований по компьютерному спорту и программированию в Ульяновском Государственном Университете.
IT-ULSU.RU</p>

<img class="responsive-img materialboxed" src="assets/img/l21.jpg">

   </div>
 </div>
<!--end modal    -->



     <section class="nashi_priimushestva">

         <div class="container">
             <div class="row">
                <div class="col l12 s12 m12" style="    padding-bottom: 90px;"><h2 class="its_poik_rob">НАШИ ПРЕИМУЩЕСТВА</h2></div>

                <div class="col l12 s12 m12 center">
                <div class="col l4 m12 s12">
                    <img class="responsive-img pigun" src="assets/img/pig1.png">
                    <p class="cre_1">Индивидуальный <br>
подход</p>
                </div>

                  <div class="col l4 m12 s12">
                    <img class="responsive-img pigun" src="assets/img/pig2.png">
                    <p class="cre_1">Уникальный <br>
дизайн</p>
                </div>

                  <div class="col l4 m12 s12">
                    <img class="responsive-img pigun" src="assets/img/pig3.png">
                    <p class="cre_1">Отражение специфики<br> деятельности компании</p>
                </div>
                </div>

                <div class="col l12 s12 m12 center" style="padding-top: 70px;     padding-bottom: 210px;">
                <div class="col l4 m12 s12">
                    <img class="responsive-img pigun" src="assets/img/pig4.png">
                    <p class="cre_1">Доскональная продуманность каждого элемента</p>
                </div>

                  <div class="col l4 m12 s12">
                    <img class="responsive-img pigun" src="assets/img/pig5.png">
                    <p class="cre_1">Соответствие<br> актуальным тенденциям</p>
                </div>

                  <div class="col l4 m12 s12">
                    <img class="responsive-img pigun" src="assets/img/pig6.png">
                    <p class="cre_1">Приемлемая стоимость</p>
                </div>
                </div>

             </div>
         </div>

     </section>

               <section class="forma_rob_22">

           <div class="container">
               <div class="row">
                   <div class="col l12 m12 s12" id="zakaz">
                       <h2 class="its_poik">Хотите заказать одну из услуг<br>
Air Creative Group?</h2>
<h2 class="pub_poik_2">Заполните форму ниже и наши менеджеры свяжутся с вами, чтобы уточнить детали.</h2>
                   </div>
<form action="/creativform" method="POST">
                     {{ csrf_field() }}
                 <div class="col l12 m12 s12">
                      <div class="col l6 m12 s12 muntis">
                      <input placeholder="Фамилия Имя" name="fio1" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>

                  <div class="col l6 m12 s12 muntis">
                      <input placeholder="Название организации" name="nazv" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>
                 </div>



                  <div class="col l12 m12 s12">
                      <div class="col l6 m12 s12 muntis">
                      <input placeholder="E-mail" name="email" id="first_name" type="email" class="validate foot_form_pub" required>
                  </div>

                  <div class="col l6 m12 s12 muntis">
                      <input placeholder="Телефон" name="phone" id="first_name" type="text" class="validate foot_form_pub" required>
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
