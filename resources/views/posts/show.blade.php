@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">{{ $post->title }}</h1>
                    <p class="card-text">
                        {{ $post->body }}
                    </p>

                    <p>Posted by: <a href="{{ route('users.show', $post->user->id)}}" class="card-link">{{ $post->user->name }}</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection