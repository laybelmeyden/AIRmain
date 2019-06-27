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
      <img src="assets/img/hack.png"></img>
      <div class="header_text">
        <p>Всероссийская программа поддержки
          <br> молодых программистов и молодежных
          <br> проектов в сфере информационных технологий</p>
      </div>
    </div>
    <div class="col s7">
      <img src="assets/img/hackback.png" class="imgs4"></img>
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
        <p class="its_1_1_1"><b>«IT-START»</b> – это постоянно действующая программа поддержки молодых программистов и молодежных проектов в сфере информационных технологий.
          <br>
          <br>
          <b>Миссия:</b> Формирование в России поколения молодых технологических предпринимателей в сфере информационных технологий, способных создавать лидирующие на мировом рынке продукты.
          <br>
          <br>
          <b>Цели и задачи:</b> Создать уникальную площадку для взаимодействия и профессионального развития с целью поиска и содействия продвижению IT — разработок на российском и международном рынках; объединение специалистов в профессиональное сообщество
          с целью повышения их профессионального уровня; повышение престижа профессии разработчика; популяризация IT-сферы среди молодежи.
          <br>
          <br>
          <b>Что скрывается за названием «IT-Start»?</b></p>
        <p class="its_2">Серия обучающих практико-ориентированных мероприятий. Тебе не придется слушать скучные лекции. Обучающий курс хакатона — это методически и логически выверенная последовательность презентаций, мастер-классов и деловых игр. Все составлено таким
          образом, чтобы ты смог пройти мыслительный путь от понимания технологий генерации идеи и поиска «своей» команды до тестирования прототипа и проверки гипотез.</p>
        <p class="its_2">Общение с лидерами рынка. Хакатон дает возможность вживую пообщаться с аксакалами инновационного бизнеса, представить собственную идею для стартапа. Кстати, многие инноваторы почему-то наивно полагают, что их идея будет интересна всем и такого
          продукта раньше не было. И бывают жутко разочарованы, столкнувшись после многолетней шлифовки и реализации идеи с конкурентами либо отсутствием клиентов. Хакатон позволит избежать подобных ситуаций: ты заранее сможешь узнать ценность своего
          продукта, правильность пути и при необходимости совершить «pivot», разворот бизнес-модели в сторону другого способа монетизации. Так ты не потеряешь зря время и усилия.
          <br> Поддержка и сопровождение перспективных IT-проектов. На хакатоны приглашаются авторитетнейшие эксперты, которые помогут оценить реальные перспективы продукта. Создатели наиболее удачных проектов получат доступ к различным формам государственной
          поддержки, акселерационным программам корпоративных партнеров и инвестициям венчурных фондов, институтов развития, бизнес-ангелов.</p>
        <p class="its_2" style="padding-bottom: 102px;">Базовый принцип “IT-START HACKATHON” — доступность. 3-дневные хакатоны мы проводим по всей стране. Следи за новостями на сайте и регистрируйся.</p>

        <a href="/events" class="waves-effect waves-light btn itstart_bnt_1">БЛИЖАЙШИЕ МЕРОПРИЯТИЯ</a>
      </div>



      <div class="col offset-l1 l6 m12 s12" style="padding-right: 0;">
        <div class="back_it_start">
          <img class="responsive-img fruy_its_start" src="assets/img/sidyat_poci_its.png">
          <img class="responsive-img liniya_clas" src="assets/img/liniya_ist.png">
          <p class="s_liniey">Мы с 2012 года работаем
            <br> с IT-стартапами, выслушали
            <br> тысячи идей и можем дать качественную обратную связь,
            <br> а также познакомить с авторами похожих
            <br> идей и проектов.</p>
        </div>
      </div>
    </div>
  </div>



</section>


<section class="it_start_1">
  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <h2 class="mero-text" style="    padding-bottom: 100px;">ПРАВИЛА УЧАСТИЯ</h2>
      </div>

      <div class="col l12 m12 s12 it_start_lk">
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d1.png">
          <p class="it_start_pop">Все участники Мероприятия должны зарегистрироваться на официальном сайте Программы или на иных сайтах, указанных на официальном сайте программы.</p>
        </div>
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d2.png">
          <p class="it_start_pop">Все участники делятся на команды от 3 до 6 человек.</p>
        </div>
      </div>

      <div class="col l12 m12 s12 it_start_lk">
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d3.png">
          <p class="it_start_pop">Участники, не вовлеченные в команду по итогу второго дня стартап-хакатона, к участию не допускаются.</p>
        </div>
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d4.png">
          <p class="it_start_pop">Все участники в обязательном порядке являются слушателями образовательной программы.</p>
        </div>
      </div>

      <div class="col l12 m12 s12 it_start_lk">
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d5.png">
          <p class="it_start_pop">Все команды получают кейс (описание современной технологии или инновационного продукта), на основании которого необходимо придумать свой проект, продукт или решение..</p>
        </div>
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d6.png">
          <p class="it_start_pop">Для демонстрации проекта участники используют утвержденный Оператором Программы шаблон презентации.</p>
        </div>
      </div>

      <div class="col l12 m12 s12 it_start_lk">
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d7.png">
          <p class="it_start_pop">Участники могут использовать для решения кейса любые технические средства в необходимом количестве.</p>
        </div>
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d8.png">
          <p class="it_start_pop">Участники не могут привлекать для решения кейса третьих лиц.</p>
        </div>
      </div>

      <div class="col l12 m12 s12 it_start_lk">
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d9.png">
          <p class="it_start_pop">Участники сами выбирают способ демонстрации решения: презентация, видеоролик, прототип и т.д.</p>
        </div>
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d10.png">
          <p class="it_start_pop">Решения участников оценивает жюри, в состав которого входят эксперты Программы, представители местного инновационного, научного и предпринимательского сообщества.</p>
        </div>
      </div>

      <div class="col l12 m12 s12 it_start_lk">
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/d11.png">
          <p class="it_start_pop">Проекты оцениваются по следующим критериям:
            <br> - актуальность;
            <br> - реализуемость проекта;
            <br> - соответствие проекта кейсу;
            <br> - предлагаемое решение;
            <br> - перспективы монетизации;
            <br> - презентация и ответы на вопросы.</p>
        </div>
        <div class="col l6 m12 s12">
          <img class="responsive-img it_start_jj" src="assets/img/jjjj.png">
          <p class="it_start_pop">Участники награждаются сертификатами, победители получают дипломы и памятные награды.</p>
        </div>
      </div>

      <div class="col l12 m12 s12 center" style="    padding-bottom: 55px;">
        <a href="https://vk.com/doc158927846_450116266?hash=6411f6476787712c6b&dl=8cde291a7af0f0a11f" class="waves-effect waves-light btn itstart_bnt">Положение о проведении IT-START</a>

      </div>


    </div>
  </div>

</section>

<section class="gallery" style="background:url('assets/img/galleryback.png');">
  <div class="container">
    <h3 class="its_poik">ФОТОГАЛЕРЕЯ</h3>
    <div class="wrap">


      <div class="controls controls78 right-align">
        <button class="btn prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>


        <button class="btn next" disabled=""><i class="fa fa-arrow-right" aria-hidden="true"></i>
        </button>

      </div>
      <div class="frame" id="basic2" style="overflow: hidden;">

        <ul class="clearfix" style="transform: translateZ(0px) translateX(0px); width: 3936px; min-width: 3000px;">
          @foreach ($itstartphoto as $itstartphotos)
          <li>


            <img src="storage/{{ $itstartphotos->img }}" class="imgye materialboxed">
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="forma_its_22">

  <div class="container">
    <div class="row">
      <div class="col l12 m12 s12">
        <h2 class="its_poik">Хотите получать актальную инормацию<br>
о проете IT-Start Hackathone?</h2>
        <h2 class="its_poik_2">Подпишитесь на нашу рассылку</h2>
      </div>

      <form action="/podpiska" method="POST">
         {{ csrf_field() }}
        <div class="col l6 m12 s12">
        <input placeholder="Напишите свой E-mail" id="email"   name='email' type="email" class="validate foot_form_1" required>
      </div>
      <div class="col l12 m12 s12" style="    padding-top: 60px;     padding-bottom: 75px;">
        <button type="submit" class="waves-effect waves-light btn btn_project_2_its">ПОДПИСАТЬСЯ</button>
      </div>
      </form>
    </div>
  </div>
</section>

@endsection
