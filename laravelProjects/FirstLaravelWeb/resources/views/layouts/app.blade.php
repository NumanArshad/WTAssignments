<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','FirstLaravel')}}</title>


<link rel="stylesheet" href={{asset('css/app.css')}}/>
{{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}

     
    </head>
    <body>
       
        @include('inc.navbar')
        <div class="container">
        <h1>Welcome to Laravel</h1>
        <header>below content is dynamic and render on every link</header>
        @include('inc.messages')
      @yield('content')
        </div>
    </body>
</html>
