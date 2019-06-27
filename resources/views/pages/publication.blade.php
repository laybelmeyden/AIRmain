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
               <div class="header_text">
                       <p style="    padding-top: 100px;">Публикация научных статей <br>
в сборнике РИНЦ</p>
                   </div>

               </div>
               <div class="col s7">
                   <img src="assets/img/laer out.png" class="imgs4"></img>
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
<section class="it_start_1" style="padding-bottom:120px;">


       <div class="row">
           <div class="col offset-l1 l10 m12 s12">

               <h2 class="mero-text" style="    padding-top: 100px;">О ПРОЕКТЕ</h2>

           </div>

           <div class="col l12 m12 s12" style="padding-right: 0;">
               <div class="col offset-l1 l4 m12 s12">
                   <p class="its_1">Международный научный журнал «Global Science» издается Автономной некоммерческой организацией «Агентство инновационного развития» с 2016 года.</p>
               <p class="its_2">Журнал издается в сотрудничестве с партнерами Агентства инновационного развития – российскими и зарубежными научными школами, институтами развития, инновационными компаниями и учеными.<br>
Научно-исследовательский центр Автономной некоммерческой организации «Агентство инновационного развития» сотрудничает с партнерами в Соединенных Штатах Америки, Канаде, Франции, Швейцарии, Германии, Польше, Литовской Республике, Израиле, Южной Корее, Японии, Китае, Казахстане и Республике Беларусь.
Основные рабочие языки международного журнала Global Science: русский, английский, французский, немецкий, польский.
м по всей стране. Следи за новостями на сайте и регистрируйся.
</p>
<p class="its_2">Журнал является средством массовой информации, зарегистрированным Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций (Роскомнадзор).</p>
  <p class="its_2">Территория распространения: Российская Федерация, страны Таможенного Союза, страны Евросоюза, США, Канада, Южная Корея, Китай.</p>
  <p class="its_2">Основная цель научного журнала — публикация результатов научных исследований аспирантов, соискателей и докторантов российских и зарубежных ВУЗов и научных центров.</p>
   <p class="its_2">Тематические разделы журнала «Global Science» соответствуют Номенклатуре специальностей научных работников, утвержденной приказом Минпромнауки России от 31.01.01 №47.</p>
     <p class="its_2" style="padding-bottom: 102px;">Экземпляры международного научного журнала «Global Science» направляются в ведущие библиотеки России и Европы, ФГУП «Российская книжная палата».</p>
                <a href="#opub" class="waves-effect waves-light btn btn_project_2_pub">ОПУБЛИКОВАТЬ СТАТЬЮ</a>
               </div>



               <div class="col offset-l1 l6 m12 s12" style="padding-right: 0;">
                   <div class="back_it_start">
                     <img class="responsive-img fruy_its_start" src="assets/img/kompikus.png" style="padding-bottom: 174px;">
                     </div>
               </div>
           </div>
       </div>



</section>


       <section class="pub_yt_2">
           <div class="container">
               <div class="row">

                <div class="col l12 m12 s12">
                       <h2 class="pub_reyt_hfd">КАК ПОДАТЬ СТАТЬЮ <br>
НА ПУБЛИКАЦИЮ</h2>
                </div>

<div class="l12 m12 s12">
   <div class="col l4 m12 s12 pub_cifri_u_2">
 <img class="responsive-img" src="assets/img/1pub.png" >
 <p class="pub_cifri_u">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
<div class="col l4 m12 s12 pub_cifri_u_2">
 <img class="responsive-img" src="assets/img/2pub.png" >
 <p class="pub_cifri_u">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
<div class="col l4 m12 s12 pub_cifri_u_2">
 <img class="responsive-img" src="assets/img/3pub.png" >
 <p class="pub_cifri_u">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
</div>

<div class="l12 m12 s12">
   <div class="col l4 m12 s12 pub_cifri_u_2">
 <img class="responsive-img" src="assets/img/4pub.png" >
 <p class="pub_cifri_u">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
<div class="col l4 m12 s12 pub_cifri_u_2">
 <img class="responsive-img" src="assets/img/5pub.png" >
 <p class="pub_cifri_u">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
<div class="col l4 m12 s12 pub_cifri_u_2">
 <img class="responsive-img" src="assets/img/6pub.png" >
 <p class="pub_cifri_u">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
</div>

<div class="col l12 m12 s12" style="padding-top: 90px;     padding-bottom: 120px;">
  <img class="responsive-img" src="assets/img/adobe_pub.png" style="float:left;">
  <div style="    padding-top: 5px; padding-left: 60px;">
      <a href="#" class="adobe_puy_kd">ПРАВИЛА ОФОРМЛЕНИЯ СТАТЕЙ</a>
  </div>
</div>

               </div>
           </div>

       </section>
       <section>
           <div class="row">
               <div class="col s12 m7 offset-m5 oplata" style="padding:0;">
                   <div class="container">
                   <div class="row">
                       <div class="col s9" style="padding:0;">
                           <h2 class="pub_reyt_hfd">ПРАВИЛА ОПЛАТЫ ПУБЛИКАЦИЙ</h2>
                       </div>
                   </div>

                   <div class="l12 m12 s12" style="display:flex;flex-direction:column;">
   <div class="col l11 m12 s12 pub_cifri_u_2" style="    margin: 0;display:flex;">
 <img class="responsive-img liksa" src="assets/img/1pub.png" style="     position: relative;
   top: 7px;   max-height: 35px;
   margin: 0 auto;
   display: flex;">
 <p class="pub_cifri_u" style="padding-top:0 !important;margin:0;position:relative;    padding-left: 79px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
<div class="col l11 m12 s12 pub_cifri_u_2" style="    margin: 0;display:flex;">
 <img class="responsive-img liksa" src="assets/img/2pub.png" style="      position: relative;
   top: 7px;  max-height: 35px;
   margin: 0 auto;
   display: flex;">
 <p class="pub_cifri_u" style="padding-top:0 !important;margin:0;position:relative;    padding-left: 79px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
<div class="col l11 m12 s12 pub_cifri_u_2" style="    margin: 0;display:flex;">
 <img class="responsive-img liksa" src="assets/img/3pub.png" style="     position: relative;
   top: 7px;   max-height: 35px;
   margin: 0 auto;
   display: flex;">
 <p class="pub_cifri_u" style="padding-top:0 !important;margin:0;position:relative;    padding-left: 79px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>

</div>
               </div>
               <div class="col l12 m12 s12" style="padding-top: 90px;padding-bottom: 120px;">
   <div class="col l12 s12 m12">
  <img class="responsive-img" src="assets/img/adobe_pub.png" style="float:left;">
  <div style="    padding-top: 5px; padding-left: 50px;">
      <a href="#" class="adobe_puy_kd">ПРАВИЛА ОФОРМЛЕНИЯ СТАТЕЙ</a>
  </div>
</div>
<div class="col l12 m12 s12" style="    padding-top: 50px;">
    <a href="#opub" class="waves-effect waves-light btn btn_project_2_pub_2" style="">ОПУБЛИКОВАТЬ СТАТЬЮ</a>
</div>
           </div>
           </div>
       </section>

          <section class="calendar" style=" ">
           <div class="row">
               <div class="col s12 m11 offset-m1" style="padding:0;">
           <h3>КАЛЕНДАРЬ КОНФЕРЕНЦИЙ</h3>
                    <div class="wrap">



     <div class="frame clear23" id="basic" style="overflow: hidden;">
       <ul class="clearfix">
          @foreach ($konf as $konfs) 
         <li>
             <div class="container">
                       <p>{{ $konfs->date }}</p>
                       <p class="white-text nonsens">{{ $konfs->title }}</p>
                                        <a href="/konf{{ $konfs->id }}" class="waves-effect waves-light btn btn_project_2_pub calendarbtn">ПОДРОБНЕЕ</a>
                   </div>
         </li>
         @endforeach
         
          
         
          


                    
       </ul>
     </div>

     <div class="row">
               <div class="col s12 m9" style="padding:0;">
           <div class="scrollbar scrollbarz">

       <div class="handle">
         <div class="mousearea"></div>
       </div>
       </div>
       </div>
     </div>
</div>

   </div>
          </div>



       </section>



       <section class="calendar" style=" ">
           <div class="row">
               <div class="col s12 m11 offset-m1" style="padding:0;">
           <h3>ПУБЛИКАЦИИ</h3>
                    <div class="wrap">



     <div class="frame clear23" id="basic4" style="overflow: hidden;">
       <ul class="clearfix">
           @foreach ($pub as $pubs) 
         <li>
             <div class="container">
                       <p>{{ $pubs->date }}</p>
                       <p class="white-text nonsens">{{ $pubs->title }}</p>
                                        <a href="{{ $pubs->ssilka }}" class="waves-effect waves-light btn btn_project_2_pub calendarbtn">ПОДРОБНЕЕ</a>
                   </div>
         </li>
         @endforeach
       </ul>
     </div>

     <div class="row">
               <div class="col s12 m9" style="padding:0;">
           <div class="scrollbar scrollbarz">

       <div class="handle">
         <div class="mousearea"></div>
       </div>
       </div>
       </div>
     </div>
</div>

   </div>
          </div>



       </section>










       <section class="forma_pub_22" id="opub">

           <div class="container">
               <div class="row">
                   <div class="col l12 m12 s12">
                       <h2 class="its_poik">Чтобы опубликовать статью в журнале,<br>
заполните форму:</h2>
<h2 class="pub_poik_2">Прикрепитье документ с публикацией  и квитанцию об оплате. Полученная публикация будет отправлена <br>
на  проверку. После проверки вы получите подтверждение о отправке публикации в номер.</h2>
                   </div>
<form action="/jurnal" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                  
                     
                 <div class="col l12 m12 s12">
                      <div class="col l6 m12 s12 muntis">
                      <input placeholder="Фамилия Имя Отчество" name="fio1" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>

                  <div class="col l6 m12 s12 muntis">
                      <input placeholder="Научная степень" name="nauch1" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>
                 </div>

                  <div class="col l12 m12 s12">
                      <div class="col l6 m12 s12 muntis">
                      <input placeholder="Тема  публикации" name="tema" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>

                  <div class="col l6 m12 s12 muntis">
                      <input placeholder="Название публикации" name="nazv" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>
                 </div>

                  <div class="col l12 m12 s12">
                      <div class="col l6 m12 s12 muntis">
                      <input placeholder="E-mail" id="first_name" name="email" type="email" class="validate foot_form_pub" required>
                  </div>

                  <div class="col l6 m12 s12 muntis">
                      <input placeholder="Телефон" name="phone" id="first_name" type="text" class="validate foot_form_pub" required>
                  </div>
                 </div>
                     <div class="col l12 m12 s12" style="padding-top: 30px;">

<div class="file-field input-field">
<div class="btn btn_file_pub">
<span>Добавить файл</span>
<input name="file" type="file" multiple>
</div>
<div class="file-path-wrapper">
<input class="file-path validate gader_pub" type="text" placeholder="Файл не выбран">
</div>
</div>

</div>
                  <div class="col l12 m12 s12" style="    padding-top: 60px;     padding-bottom: 75px;     padding-right: 30px;">
                      <button type="submit" class="waves-effect waves-light btn btn_project_2_its right">ОТПРАВИТЬ</button>
                  </div>
                  </form>
               </div>
           </div>
       </section>
       
    

@endsection
