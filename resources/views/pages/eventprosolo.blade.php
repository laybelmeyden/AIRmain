
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

                <img src="assets/img/hy4.png" class="responsive-img ht4">
                <img src="assets/img/hy5.png" class="responsive-img ht5">
                <img src="assets/img/hy6.png" class="responsive-img ht6">
                <img src="assets/img/hy7.png" class="responsive-img ht7">
                
            </div>
            
        </div>
    </div>
</section>

        
  
  @endsection