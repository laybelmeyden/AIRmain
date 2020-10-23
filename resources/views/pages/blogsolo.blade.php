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

<section>

  <div class="container">
      <div class="main_news">
        <div class="main_news_img">
          <img src="/storage/{{ $solo->image }}" alt="">
        </div>
      </div>
      <div class="sub_news">
      <div class="sub_news_text">
      {!! $solo->sodnew !!}
      </div>
      <div class="sub_news_title">
      <p class="sub_news_title__p1">
        {!! $solo->date !!}
      </p>
      <p  class="sub_news_title__p2">
        {!! $solo->body !!}
      </p>
      </div>
      </div>
  </div>
</section>
@endsection