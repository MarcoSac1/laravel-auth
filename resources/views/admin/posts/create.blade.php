@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-3">
            <form action="{{ route ('admin.posts.store')}}" method="POST">
                @method('POST')
                @csrf

                <div class="mb-3">
                    <h1>Create new post</h1>
                </div>

                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="image_url">Image Url</label>
                    <input type="text" name="image_url" id="image_url class="form-control">
                </div>

                <div class="mb-3">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="16" class="form-controll"></textarea>
                </div>

                <input type="submit" value="Create new post" class="btn btn-primary btn-lg">
                <input type="reset" value="Reset fields" class="btn btn-warning btn-lg">

            </form>
        </div>
    </div>
</div>
@endsection
