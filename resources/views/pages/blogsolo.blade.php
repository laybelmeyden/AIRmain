
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
      <div class="row">
        
          <div class="col l12 m12 s12 center ороро">
             <img src="/storage/{{ $solo->image }}" class="popal">
              <div class="pizsa"></div>
             <img src="assets/img/gg1.png" class="responsive-img gth1">
             <img src="assets/img/gg2.png" class="responsive-img gth2">
          </div>
           
              
             
          <div class="col l12 s12 m12 kaka">
            <div class="col l7 m12 s12">
            <p class="blivota1" >{!! $solo->sodnew !!}</p>

           
                </div> 
                <div class="col l5 m12 s12 joppa">
                    <div class="ghyterd">
                 <div class="asdasdasfasfasfas">
                            <div class="col s2 iii">
                    <img src="assets/img/gov1.png" class="responsive-img ht11">
                </div>
                <div class="col s2 iii">
                    <img src="assets/img/gov2.png" class="responsive-img ht44">
                </div>
                 </div>
                        <p class="picjhg">{!! $solo->date !!}</p>
                        
                        <p class="picjhg1">{!! $solo->body !!}</p>
 <div class="XUJAJDKJALDJLAJDL">
     <img src="assets/img/hy5.png" class="responsive-img ht55">
                <img src="assets/img/hy6.png" class="responsive-img ht66">
                <img src="assets/img/hy7.png" class="responsive-img ht77">
 </div>
                    </div>
                    
                   
                </div>
             
          </div>
         
      </div>
  </div>
</section>

  
  @endsection