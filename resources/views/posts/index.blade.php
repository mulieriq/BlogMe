@extends('layouts.app')

@section('content')
    <h1>Posts</h>
        @if (count($posts)>1)
            @foreach ($posts as $post)
            <div class="well">
            <h3>{{$post->title}}</h3>
            <small>Created on {{$post->created_at}}</small>
            </div>
                
            @endforeach

        @else
                <p>No post Found</p>
        @endif
@endsection
