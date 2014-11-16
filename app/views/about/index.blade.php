@extends('layouts.default')
@section('content')
  <h1>About Page.</h1>
  @if(isset($name))
    {{$name}} <br />
  @else
    No Name Given <br />
  @endif
  {{$location}} <br />
  {{$age}} <br />
  {{$major}} <br />
@stop
