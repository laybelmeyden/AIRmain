@extends('layouts.master')

@section('content')

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

<section>
  <div class="container" style="    padding-top: 90px;
      padding-bottom: 90px;">
    <div class="row">
              @foreach ($event as $events)
    @if(!empty($events))

  <div class="col l3 m12 s12 fara">
       <a href="/mer{{ $events->id }}"> 
       <li class="portfolio-item_1">
          <img src="storage/{{ $events->preimg }}" class="img-responsive jgajjglsajgl">
          <figcaption class="mask_1">
            <p class="ev1">{{ $events->title }}</p>
            <p class="ev2">{{ $events->minibody }}</p>
            <p class="nijniy_flex">{{ $events->date }}</p>
            <div class="top_flex_anm_2">
              <a href="/mer{{ $events->id }}" class="waves-effect waves-light btn pull_btn_1 class{{ $events->formaregi }}">УЧАСТВОВАТЬ</a>
            </div>
          </figcaption>

        </li>
        </a>
      </div>
      @endif
      @endforeach
      @if(empty($events))
      <h2 class="its_poik_niz" style="text-align: center;">Новые мероприятия появяться совсем скоро, ожидайте !</h2>
      @endif
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row">
      <div class="col l12 center">
        <a href="http://душевная.москва" target="_blank">
        <img src="assets/img/4-OPzA8LbXg.jpg" style="" class="baner_reclama">
        </a>
      </div>
    </div>
  </div>
</section>
@endsection
