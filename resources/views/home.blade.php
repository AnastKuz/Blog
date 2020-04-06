@extends('layouts.app')

@section('content')

    <div class="container">
            @if(session()->get('success'))
                <div class="alert alert-dark mt-4 col-10 mx-auto">
                    {{ session()->get('success') }}
                </div>
            @endif
            @foreach($posts as $post)
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('posts.show', ['post'=>$post->id])}}" class="text-decoration-none text-dark"><h2>{{$post->title}}</h2></a>
                            </div>
                            <div class="card-body d-flex">
                                <p>Written on <small>{{$post->created_at}}</small></p>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="ml-auto">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-dark">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
@endsection
