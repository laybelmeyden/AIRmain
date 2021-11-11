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
       @if(!empty($data) && $data->count())
              @foreach ($eventpro as $eventpros)

  <div class="col l3 m12 s12 fara">
       <a href="/promero{{ $eventpros->id }}"> 
       <li class="portfolio-item_1">
          <img src="storage/{{ $eventpros->preimg }}" class="img-responsive jgajjglsajgl">
          <figcaption class="mask_1">
            <p class="ev1">{{ $eventpros->title }}</p>
            <p class="ev2">{{ $eventpros->minibody }}</p>
            <p class="nijniy_flex">{{ $eventpros->date }}</p>
            <!-- <div class="top_flex_anm_2">
              <a href="/promero{{ $eventpros->id }}" class="waves-effect waves-light btn pull_btn_1">УЧАСТВОВАТЬ</a>
            </div> -->
          </figcaption>

        </li>
        </a>
      </div>
      @endforeach
      @else
		    
		        There are no data.
		    
		@endif
      <div class="col l12 s12 m12">
      <div class="center"> {!! $data->render() !!}</div>
      </div>
    </div>
  </div>
</section>
@endsection
