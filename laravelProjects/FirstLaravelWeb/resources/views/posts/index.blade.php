@extends('layouts.app')
@section('content')
<h1>Post index page</h1>
    @if (count($data)>0)
    @foreach ($data as $item)
    <header>
        {{$item->body}}
    </header>
    <a href="post/{{$item->id}}">    {{$item->title}}</a>
        
    @endforeach
        {{ $data->links() }}
    @endif

@endsection