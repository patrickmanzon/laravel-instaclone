@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img src="{{ $post->imagePath() }}" class="w-100">
        </div>
        <div class="col-md-4">
            <h2>
                {{ $post->caption }}
            </h2>
        </div>
    </div>
</div>
@endsection
