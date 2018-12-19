<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">   <!-- CSRF Token -->

  <meta name="csrf-token" content="{{ csrf_token() }}">   <title>{{ config('app.name', 'Laravel') }}</title>   <!-- Scripts -->

  <script src="{{ asset('js/app.js') }}" defer></script>

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>   <!-- Fonts -->

  <link rel="dns-prefetch" href="https://fonts.gstatic.com">

  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">   <!-- Styles -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link href="{{ mix('/css/app.css') }}" rel="stylesheet"></head><body>@include ('inc.navbar')

      @include('inc.messages')

      @yield('content')<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

<script>

  CKEDITOR.replace( 'article-ckeditor' );

</script><!-- Go to www.addthis.com/dashboard to customize your tools -->

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c10d2dc41dbde2c"></script></body>

</html>

