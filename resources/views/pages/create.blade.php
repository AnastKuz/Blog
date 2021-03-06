@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card mt-5">
            <h5 class="card-header">Create new post</h5>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="post-title">Post's Title</label>
                        <input type="text" class="form-control" id="post-title" placeholder="Title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="post-text">Post</label>
                        <textarea class="form-control" id="post-text" rows="3" placeholder="Enter your text here..." name="body" value="{{ old('body') }}"></textarea>
                    </div>
                    <div class="form-group mb-5 d-flex flex-column">
                        <label for="photo">Choose file</label>
                        <input type="file" name="photo" class="py-1" value="{{ old('photo') }}">
                        <div>{{ $errors->first('photo') }}</div>
                    </div>
                    <button type="submit" class="btn btn-dark">Create</button>
                </form>
            </div>
        </div>
    </div>

@endsection
