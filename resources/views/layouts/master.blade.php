<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title class="text-primary font-bold">Pyay Myanmar</title>
  <link rel="icon" type="image/png" href="{{ asset('user/assets/img/logo.jpg') }}" />

  <link rel="stylesheet" href="{{ asset('user/assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('user/assets/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('user/assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('user/assets/css/theme.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  @yield('style')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('partials.header')
  @yield('content')
 @include('partials.footer')

<script src="{{ asset('user/assets/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('user/assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('user/assets/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('user/assets/js/theme.js') }}"></script>
@yield('script')

</body>
</html>
