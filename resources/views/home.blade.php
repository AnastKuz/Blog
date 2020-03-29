@extends('layouts.app')

@section('content')

    <div class="container">
            @foreach($posts as $post)
                <div class="card my-5">
                    <div class="card-header">
                        <a href="/post/{{$post->id}}"><h2>{{$post->title}}</h2></a>
                    </div>
                    <div class="card-body">
                        <p>Written on <small>{{$post->created_at}}</small></p>
                    </div>
                </div>
            @endforeach
    </div>
@endsection
