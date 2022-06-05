@extends("layouts.app")
@section("content")
    <div class="container d-flex flex-column justify-content-center my-5">
        <a class="btn btn-success w-25 mb-3 align-self-end" href="{{ route("posts.create") }}">Add Post</a>
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Post By</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>{{ $post->user ? $post->user->name : "n/a" }}</td>
                    <td colspan="2">
                        <a href="{{ route("posts.show", ["post" => $post->id]) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route("posts.edit", ["post" => $post->id]) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

