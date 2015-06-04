@extends('layouts.home')

@section('navbar')
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <span class="navbar-brand page-scroll" href="#">
        <span class="fa fa-play-circle">My name is</span> <span class="light glitch" data-text="odi">odi</span>
      </span>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

      <ul class="nav navbar-nav">
        <li><a href="{{{ URL::to('http://github.com/mathdroid') }}}" style="color:#96281b;">Github</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="{{{ URL::to('http://projects.muhammadmustadi.com') }}}" style="color:#cf000f;">Projects</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="{{{ URL::to('http://blog.muhammadmustadi.com') }}}" style="color:#d91e18;">Blog</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>

@stop

@section('content')
<!-- Intro Header -->
<header class="intro">
  <div class="intro-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1><a href="{{{ URL::to('http://muhammadmustadi.com/download/modulair.apk') }}}" style="color:#d91e18;">Download Modulair Client Beta</a></h1>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<!-- <section id="about" class="container content-section text-center">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      @include('includes.aboutshort')
    </div>
  </div>
</section> -->
<!-- Footer -->
<!-- <footer class="footerx">
  <p><small>Copyright &copy; Muhammad Mustadi 2014</small></p>
</footer> -->

<!-- <script type="text/javascript">var s=document.createElement("script");s.id="bornevia-chat";s.type="text/javascript";s.src="http://127.0.0.1:3000/assets/chat-iframe-builder.js?chat_api_key=c8c22b17936b2eda8e58065e&url=http://127.0.0.1:3000";document.head.appendChild(s);</script> -->

@stop
