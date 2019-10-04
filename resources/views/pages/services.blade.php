{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','LSAPP')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>Services</h1>
        <p>This is services page</p>
    </body>
</html> --}}

@extends('layouts.app')

@section('content')
{{-- <h1>Services</h1> --}}
<h1>{{$title}}</h1>
{{-- <p>This is services page</p> --}}

@if(count($services)>0)
    <ul class="list-group">
        @foreach ($services as $service)
          <li class="list-group-item">{{$service}}</li>  
        @endforeach

    </ul>
    @endif
@endsection