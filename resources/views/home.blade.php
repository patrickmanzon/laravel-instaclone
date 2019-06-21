@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{ auth()->user()->username }}</div>

                <div class="card-body">
                   <img src="{{ asset('storage/uploads/logo.png') }}">
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
