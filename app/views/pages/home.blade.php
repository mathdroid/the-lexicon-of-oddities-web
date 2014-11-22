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
                    <li><a href="#">Blog</a></li>
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
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Muhammad Mustadi</h1>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="{{{ URL::to('portfolio') }}}" class="btn btn-defaults btn-lg" >Portfolio</a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <a href="{{{ URL::to('about') }}}"  class="btn btn-defaults btn-lg">About</a>
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
    <footer>
        <div class="container text-center">
            <p><small>Copyright &copy; Muhammad Mustadi 2014</small></p>
        </div>
    </footer>
@stop
