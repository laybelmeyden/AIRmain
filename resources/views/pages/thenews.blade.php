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
  <div class="container">
    <div class="row">
              @if(!empty($data) && $data->count())

 @foreach ($data as $allnew)

      <!--<div class="col l4 s12 m12 hyt1">-->
      <!--  <a class="n3" href="/new{{ $allnew->id }}">-->
      <!--    <div class="hyt">-->
      <!--      <p class="n1">{{ $allnew->date }}</p>-->
      <!--      <div class="col l4 m12 s12 iu2 kkk">-->
      <!--        <p class="n2">{!! str_limit($allnew->body, 200) !!}</p>-->
      <!--      </div>-->

      <!--      <img src="storage/{{ $allnew->image }}" class="oi oioi">-->
      <!--    </div>-->
      <!--  </a>-->
      <!--</div>-->
      
      <div class="col l4 s12 m12 hyt1">
                <a href="/new{{ $allnew->id }}">
                    <div class="">
                        <p class="n1">{{ $allnew->date }}</p>
                        <div class="kkk"><p class="n2">{!! str_limit($allnew->body, 200) !!}</p></div>
                
                <div class="kjuv_cropp">
                <img src="storage/{{ $allnew->image }}" class="responsive-img kjuy">
                </div>
                    </div>
                </a>  
         </div>
@endforeach
@else
		    
		        There are no data.
		    
		@endif



    </div>
   <div class="center"> {!! $data->render() !!}</div>
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
