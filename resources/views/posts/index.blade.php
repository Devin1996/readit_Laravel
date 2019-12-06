@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
                {{-- <small>Written on {{$post->created_at}}  by {{$post->user->name}}</small> --}}
    
            </div>
        @endforeach
        {{-- {{$posts->links()}} --}}
    @else
        <p>No Posts Found</p>        
    @endif
@endsection