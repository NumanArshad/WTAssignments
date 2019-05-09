@extends('layouts.app')
@section('content')
<h1>Post Show page</h1>
<h2>title is {{$showspec->title}}</h2>
  <header>
        {{$showspec->body}}
  </header>
  <header>created on {{$showspec->created_at}}</header>
  <header>updated on {{$showspec->updated_at}}</header>
  <a href="post/{{$item->id}}/edit">    {{$item->title}}</a>
@endsection