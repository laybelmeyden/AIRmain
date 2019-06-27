@extends('layouts.master')

@section('content')

<section>         
    <div class="container">
	<div id="grid-gallery" class="grid-gallery">
		<section class="grid-wrap">
          <h2 class="mero-text666">{{ $solo->title }}</h2>
			<ul class="grid">
			<li class="grid-sizer"></li><!-- for Masonry column width -->
		         
		    @foreach(json_decode($solo->images, true) as $image)             
				<li><figure>
				<img src="{{ URL::to('/storage/'.$image)}}"/>
				</figure></li>
		    @endforeach

			</ul>
			</section><!-- // grid-wrap -->
			<section class="slideshow">
			<ul>
		                           
			@foreach(json_decode($solo->images, true) as $image)             
				<li><figure>
				<img src="{{ URL::to('/storage/'.$image)}}"/>
				</figure></li>
		    @endforeach
		 
		    </ul>
			<nav>
			<span class="nav-prev">
            <i class="fa fa-arrow-circle-left fas photo_fa" aria-hidden="true"></i>
            </span>
			<span class="nav-next">
            <i class="fa fa-arrow-circle-right fas photo_fa" aria-hidden="true"></i>  
            </span>
			<span class="nav-close">
            <i class="fa fa-times-circle fas photo_fa" aria-hidden="true"></i>  
            </span>
			</nav>
		</section>
	</div>
</div>
        
</section>

@endsection