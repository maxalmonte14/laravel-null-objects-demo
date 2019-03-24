@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <b>Name:</b> {{ $user->name }}
                    </p>
                    <p class="card-text">
                        <b>Email:</b>  {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection