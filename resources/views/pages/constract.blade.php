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
                    <img class="responsive-img" src="assets/img/edulogo.png"></img>
                    <div class="header_text">
                        <p>Конструкторы <br>
образовательной <br>
робототехники</p>
                    </div>
                </div>
                <div class="col s7">
                    <img src="assets/img/edufont.png" class="imgs4"></img>
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
                    <p class="its_1">Наша компания является дилером основных производителей конструкторов образовательной робототехники, по-этому наши цены выгодно отличаются от цен конкурентов. </p>
<p class="its_2">Помимо этого, мы занимаемся поставками сопутствующего оборудования и методических пособий по робототехнике.</p>
 <p class="its_2">Но самое главное, Агентство инновационного развития имеет опыт комплексных решений: создание лабораторий, «кружков» робототехники «под ключ». Мы не только подберем оптимальное оборудование для Вас, но и проведем необходимую настройку и обучение, укомплектуем необходимым методическим материалом! </p>

                       <div class="col l12 m12 s12" style="padding-top:30px; padding-left: 0;     padding-bottom: 10px;" >
                           <a class="waves-effect waves-light btn btn_project_2_its">ИНТЕРНЕТ МАГАЗИН</a>
                       </div>

                </div>



                <div class="col offset-l1 l6 m12 s12" style="padding-right: 0;">
                    <div class="back_it_start">
                      <img class="responsive-img fruy_its_start" src="assets/img/educar.png">
                      <img class="responsive-img liniya_clas" src="assets/img/edusin.png">
                      <p class="s_liniey" style="padding-top: 14px;">Робототехника сегодня занимает лидирующие <br>
позиции среди увлечений и интересов <br>
современных детей.</p>
                    </div>
                </div>
            </div>
        </div>



</section>








      <section class="">

          <div class="container">
              <div class="row">
                 <div class="col l12 s12 m12" style="    padding-bottom: 70px;"><h2 class="its_poik_rob">ЧТО ЕСТЬ В НАШЕМ <br>
МАГАЗИНЕ?</h2></div>

                  <div class="col l12 s12 m12 tupo_i">
    <div class="card horizontal pop_edu_v_magadan">

      <div class="card-image gover">
            <img class="" src="assets/img/maga1.png">
        </div>



          <div class="card-stacked giti">
            <div class="card-content">
                <p class="magad2">LEGO EDUCATION</p>
                  <p class="magad1">Наборы для профессионального педагогического применения на базе деталей
конструктора LEGO, а также специальные образовательные методики
и программное обеспечение. Есть наборы для дошкольного образования,
начальной школы и основной школы.</p>
                  <a class="btn_magad btn">СМОТРЕТЬ</a>

            </div>
          </div>
         </div>
        </div>

          <div class="col l12 s12 m12 tupo_i">
    <div class="card horizontal pop_edu_v_magadan">

      <div class="card-image gover">
            <img class="" src="assets/img/maga2.png">
        </div>



          <div class="card-stacked giti">
            <div class="card-content">
                <p class="magad2">HUNA</p>
                  <p class="magad1">Линейка конструкторов Huna позволит начать обучение робототехнике с нуля.
Даже самые юные инженеры смогут освоить простые и интересные уроки,
которые прилагаются к наборам. Конструкторы HUNA устроены по принципу:
от простого уровня освоения к сложному.</p>
                  <a class="btn_magad btn">СМОТРЕТЬ</a>

            </div>
          </div>
         </div>
        </div>


             <div class="col l12 s12 m12 tupo_i">
    <div class="card horizontal pop_edu_v_magadan">

      <div class="card-image gover">
            <img class="" src="assets/img/maga3.png">
        </div>



          <div class="card-stacked giti">
            <div class="card-content">
                <p class="magad2">РОБОТРЕК</p>
                  <p class="magad1">«Роботрек» — это российская компания, которая производит образовательные
робо-конструкторы. Они созданы на базе корейских наборов Huna с добавление
уникальных методик и компонентов.</p>
                  <a class="btn_magad btn">СМОТРЕТЬ</a>

            </div>
          </div>
         </div>
        </div>


           <div class="col l12 s12 m12 tupo_i">
    <div class="card horizontal pop_edu_v_magadan">

      <div class="card-image gover">
            <img class="" src="assets/img/maga5.png">
        </div>



          <div class="card-stacked giti">
            <div class="card-content">
                <p class="magad2">МИРОНИКА</p>
                  <p class="magad1">Российский производитель сенсорных столов и мебели для робототехники.
Продукция бренда развивает мелкую моторику, воспитывает навыки работы
в коллективе.</p>
                  <a class="btn_magad btn">СМОТРЕТЬ</a>

            </div>
          </div>
         </div>
        </div>


         <div class="col l12 s12 m12 tupo_i">
    <div class="card horizontal pop_edu_v_magadan">

      <div class="card-image gover">
            <img class="" src="assets/img/maga6.png">
        </div>



          <div class="card-stacked giti">
            <div class="card-content">
                <p class="magad2">FISHERTECNIK</p>
                  <p class="magad1">Механические и электронные обучающие конструкторы. Уникальность этих
конструкторов заключается в том, что, сочетая элементы из разных наборов,
можно создавать любые, абсолютно любые механизмы, которые только
возможно себе представить.</p>
                  <a class="btn_magad btn">СМОТРЕТЬ</a>

            </div>
          </div>
         </div>
        </div>

      </div>
              </div>
          </div>

      </section>

                  <section class="">

            <div class="container">
                <div class="row">
                    <div class="col l12 m12 s12">
                        <h2 class="its_poik">Хотите получать актальную инормацию
о навинках и поступлениях в нашем Интернет-магазине?</h2>
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
