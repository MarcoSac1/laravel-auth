@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @dump($posts)
        <div class="col-12">
            <table class="table table-hover table-success">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->creation_date}}</td>
                        <td>
                            <a href="{{route ('admin.posts.show',$post )}}" class="btn btn-primary btn-sm">Show</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
