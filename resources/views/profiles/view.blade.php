@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5 text-center">
           <img src="{{ $user->profile->imagePath() }}" alt="" class="m-auto w-100 rounded-circle ">
       </div>
       <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
              <h1>
                {{ $user->username }}
                
              </h1>
              <follow-button></follow-button>
              @can('view', $user->profile)
                <a href="{{ route("post.create") }}">Create Post</a>
              @endcan
            </div>
           <div class="d-flex">
               <div class="pr-5"><strong>{{ $user->posts()->count() }}</strong> {{ str_plural("post", $user->posts()->count()) }}</div>
               <div class="pr-5"><strong>423</strong> followers</div>
               <div class="pr-5"><strong>423</strong> following</div>
           </div>
            @can('update', $user->profile)
              <a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            @endcan
           <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? ""}}</div>
           <div>{{ $user->profile->description ?? ""}}</div>
           <div><a href="#">{{ $user->profile->url ?? ""}}</a></div>
       </div>
   </div>

   <div class="row">
      @foreach($user->posts as $post)
      <div class="col-4 pt-5">
        <a href="{{ route("post.view", $post->id) }}">
          <img src="{{ $post->imagePath() }}" alt="" class="m-auto w-100">
        </a>
      </div>
      @endforeach
   </div>
   
</div>
@endsection
