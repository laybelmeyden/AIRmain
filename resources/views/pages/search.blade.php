@extends('layouts.master')

@section('content')
           
<div id="body">
<div class="container">
    <div class="row">
        <h2 class="mero-text">Результаты поиска:@if ($flash = session('message'))
              <div id="ins" value="{{ $flash }}">{{ $flash }}</div>
            @endif
        </h2>
        <div v-for="event in events">
            <div class="col l12 s12 m12 aura anapa">
                <div class="col l4 m4 s12 aura">
                    <img class="responsive-img ozalgon" :src="'/storage/' + event.image">
                </div>
                <div class="col l8 m8 s12 mana">
                    <h2 class="utonul center"> @{{event.title}}</h2>
                    <h2 class="utonul1">
                        <div v-html="event.body"></div>
                    </h2>
                </div>
                <div class="col l8 m8 s12 right">
                    <a :href="'/mer' + event.id " class="waves-effect waves-light btn pull_btn55 mana1">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
        <div v-for="allnew in allnews">
            <div class="col l12 s12 m12 aura anapa">
                <div class="col l4 m4 s12 aura">
                   <img class="responsive-img ozalgon" :src="'/storage/' + allnew.image">
                </div>
                <div class="col l8 m8 s12">
                    <h2 class="utonul">@{{allnew.body}}</h2>
                    <h2 class="utonul1">
                        @{{allnew.body}}
                    </h2>
                </div>
                <div class="col l8 m8 s12 right">
                    <a :href="'/new' + allnew.id " class="waves-effect waves-light btn pull_btn55">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection