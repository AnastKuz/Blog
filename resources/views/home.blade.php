@extends('layouts.app')

@section('content')

    <div class="container">
{{dd($posts)}}
        @if($posts->count() > 0)
            @foreach($posts as $post)
                <div class="card my-5">
                    <div class="card-header">
                        <h2>{{$posts->title}}</h2>
                    </div>
                    <div class="card-body">
                        <p>{{$posts->created_at}}</p>
                        <img src="{{$posts->photo}}" alt="image">
                        <p class="card-text">{{$posts->body}}</p>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <div class="col">
            <h4 class="text-center">No posts found!</h4>
                </div>
            </div>
        @endif

    </div>
@endsection
