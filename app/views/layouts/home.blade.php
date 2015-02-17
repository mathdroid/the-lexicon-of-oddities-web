<!DOCTYPE html>
<html lang="en">
<head>

  {{ HTML::style('css/bootstrap.css') }}
  {{ HTML::style('css/bootstrap-theme.css') }}
  {{ HTML::style('css/home-blank.css') }}
  {{ HTML::style('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic') }}
  {{ HTML::style('http://fonts.googleapis.com/css?family=Montserrat:400,700') }}

  @include('includes.head')
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    @yield('navbar')

    @yield('content')

</body>

{{ HTML::script('js/jquery-1.11.0.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/jquery.easing.min.js') }}
{{ HTML::script('js/grayscale.js') }}

</html>
