@extends('layouts.app')
@section('content')
<h1>Post create page</h1>


<div class="well">
        
{!!Form::open(['action'=>'PostsController@update','method'=>'POST'])!!}
<div class="form-group">
{{Form::label('title','Title')}}
{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
</div><div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::text('body','',['class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
 
{!!Form::close()!!}

     
    </div>
    
@endsection