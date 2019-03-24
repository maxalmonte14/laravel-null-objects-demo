@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @foreach($posts as $post)
                <div class="card" style="margin-bottom: 1%">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h5>
                        <p>Posted by: <a href="{{ route('users.show', $post->user->id)}}" class="card-link">{{ $post->user->name }}</a></p>
                    </div>
                </div>
            @endforeach

            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection