@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">  
<h1>welcome to index page</h1>
<header>this is from pagescontroller {{$title}}</header>
<p><a class="btn btn-primary" href="/login" role="button">login</a>  <a class="btn btn-success" href="/register" role="button">register</a></p>
</div>
@endsection