@extends('layouts.app')

@section('content')

<div class="container">
    @foreach($posts as $post)
    <div class="card my-5">
        <div class="card-header">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="card-body">
            <p>{{$post->created_at}}</p>
            <div class="row">
                <div class="col">
                    <p class="card-text">{{$post->body}}</p>
                </div>
                <div class="col pt-2">
                    <img src="{{$post->photo}}" alt="image">
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
