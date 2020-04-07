@extends('layouts.app')

@section('content')

<div class="container">

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
            <div class="row mt-4">
                <div class="col-1 d-flex">
                    <div class="mr-1">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-dark">Edit</a>
                    </div>
                    <div>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="ml-auto">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
