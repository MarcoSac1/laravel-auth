@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-3">
            <h2>{{ $post->id }}</h2>
            <h2>{{ $post->title }}</h2>
            <h3>{{ $post->author }}</h3>
            <div class="image">
                <img src="{{ $post->image_url }}" class="img-fluid" alt="img">
            </div>
            <h4>{{ $post->creation_date}}</h4>
            <p>{{ $post->content}}</p>
            <div class="card-footer">
                <a href="{{route ('admin.posts.index') }}" class="btn btn-primary btn-sm">Return to posts list</a>
                <a href="{{route ('admin.posts.edit',$post )}}" class="btn btn-success btn-sm">Edit</a>
                <form action="{{route ('admin.posts.destroy',$post )}}" method="POST" class="d-inline-block form-destroyer" data-post-title='{{ $post->title }}'>
                    @method('delete')
                    @csrf

                    <input type="submit" class="btn btn-warning btn-sm" value="delete"></input>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-scripts')
    @vite('resources/js/posts/delete-index-confirmation.js')
@endsection
