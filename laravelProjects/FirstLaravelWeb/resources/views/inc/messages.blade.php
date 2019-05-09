@if (count($errors)>0)
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}} that
    </div>
@endforeach
@endif
@if (session('successMsg'))
<div class="alert alert-danger">
        {{session('successMsg')}}
    </div>
@endif

    
