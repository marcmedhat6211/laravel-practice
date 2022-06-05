@extends("layouts.app")
@section("content")
    <div class="container d-flex flex-column align-items-center my-5">
        <h1 class="text-center mb-3">Show page</h1>
        <div class="card w-50 p-3">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="mb-0 card-text">{{ $post->description }}</p>
        </div>
    </div>
@endsection
