<!DOCTYPE html>
<html>

<head>
  <title>{{ $titl or 'АИР' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'Агенство Инновационного Развития' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'AIR' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
    <meta name="yandex-verification" content="2c049c2c17b41118" />
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'АИР' }}" />
  <meta property="og:description" content="{{ $meta or 'Агенство Инновационного Развития' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/Logo.png' }}" content="storage/{{ $img or 'pages/Logo.png' }}"  />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="AIR" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="assets/component.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/swiper/swiper.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic-ext" rel="stylesheet">
  <meta name="google-site-verification" content="Fb_ND32SEq3R5TtSNN4lBG3_UykPvjBmjPgiw6GdjJI" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
        <!-- @if ($flash = session('message'))
  <div class="alert1">
   <div class="toast" style="    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
    position: absolute;
    left: 0px;
    top: 0px;
    transition: visibility 0s linear 0.3s, opacity 0.3s linear;
    visibility: visible;
    z-index: 2000000000;
    position: fixed;
    color: black;">{{ $flash }}</div>
   </div>
  @endif
  -->
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
