{{-- app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
    name="description"
    content="Epictrics offers unique travel experiences with adventure, family, and exploration tours. Discover stunning destinations, exclusive deals, and flexible itineraries. Book your dream trip with Epictrics today!"
  />
  <meta
    name="keywords"
    content="book a tour, travel tour, cheap tours, domestic tours, international tours, holiday tours, adventure travel, family tours, group travel, beach tours, nature tours, all-inclusive tours, summer tours, travel packages, vacation deals"
  />
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/users/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/animate.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/magnific-popup.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/nice-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/nouislider.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/jquery-ui.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/swiper-bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/styles.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/users/css/map.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/icons/icomoon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('image/logo/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('image/logo/favicon.png') }}" />
        <link rel="stylesheet" href="{{ asset('/fonts/font-awesome/css/all.css') }}" />
</head>
<body>
      <!-- Header -->

    @include('Components.users.header')
      <!-- Slider chỉ hiển thị ở trang chủ -->
      @if(Route::currentRouteName() === 'home')
    
      @include('Components.users.slider')
     @endif
      <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>
      <!-- footer -->
    @include('Components.users.footer')
      <!-- Login and Register Modals -->
      @include('components.users.login-modal')
      @include('components.users.register-modal')
    <!-- Javascript -->
    <script type="text/javascript" src="{{asset('js/user/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/lazysize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/map.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/jquery.nice-select.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/rangle-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/nouislider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/swiper.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/user/js/jquery-validate.js')}}"></script>
    <script>
      new WOW().init();
  </script>
    <!-- /Javascript -->
</body>
</html> 