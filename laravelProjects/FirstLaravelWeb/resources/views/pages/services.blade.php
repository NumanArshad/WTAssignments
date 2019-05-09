@extends('layouts.app')
@section('content')
<h1>welcome to services page</h1>
<header>{{$title}}</header>
@if(count($servicesList)>0)
<ul class="list-group">
  @foreach ($servicesList as $item)
<li class="list-group-item">{{$item}}</li>
  @endforeach
</ul>
@endif
@endsection