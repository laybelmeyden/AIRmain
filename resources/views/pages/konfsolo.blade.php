@extends('layouts.master')

@section('content')




<section>
  <div class="container">
    <div class="row">
      <div class="col l12 s12 m12" style="    word-break: break-all;">
        <p class="its_poik_rob">{!! $solo->title !!}</p
      </div>
      
      <p class="white-text">{!! $solo->body !!}</p>
      
    </div>
  </div>
</section>




@endsection