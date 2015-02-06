@extends('layouts.home')

@section('navbar')
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top">
        <i class="fa fa-play-circle"></i> Muhammad <span class="light">mustadi</span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

      <ul class="nav navbar-nav">
        <li><a href="#">Portfolio</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="{{{ URL::to('http://projects.muhammadmustadi.com') }}}">Projects</a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="{{{ URL::to('http://blog.muhammadmustadi.com') }}}">Blog</a></li>
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
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <h1 class="brand-heading">Hello.</h1>
        </div>
<div class="col-md-3">
</div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<section id="about" class="container content-section text-center">
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      @include('includes.aboutshort')
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="footerx">
  <p><small>Copyright &copy; Muhammad Mustadi 2014</small></p>
</footer>

<!-- <script type="text/javascript">var s=document.createElement("script");s.id="bornevia-chat";s.type="text/javascript";s.src="http://127.0.0.1:3000/assets/chat-iframe-builder.js?chat_api_key=c8c22b17936b2eda8e58065e&url=http://127.0.0.1:3000";document.head.appendChild(s);</script> -->

@stop
