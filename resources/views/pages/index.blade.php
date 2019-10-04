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
        <h1>Read It</h1>
        <p>Welcome to first ever article based Social media</p>
    </body>
</html> --}}

@extends('layouts.app')

@section('content')
{{-- <h1>Read It</h1> --}}
{{-- <h1>{{$title}}</h1>
<p>Welcome to first ever article based Social media</p> --}}
<div class="jumbotron text-center">
    <h1>Read IT !</h1>
    
    <p>Welcome to first ever article based Social media</p>
    
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">SignIn</a>
       <a class="btn btn-success btn-lg" href="/register" role="button">SignUp</a>
    </p>

@endsection