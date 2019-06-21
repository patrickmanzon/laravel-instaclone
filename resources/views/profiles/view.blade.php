@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5 text-center">
           <img src="/uploads/images/default.jpg" alt="" class="m-auto w-100 rounded-circle ">
       </div>
       <div class="col-9 pt-5">
           <div><h1>{{ $user->username }}</h1></div>
           <div class="d-flex">
               <div class="pr-5"><strong>423</strong> posts</div>
               <div class="pr-5"><strong>423</strong> followers</div>
               <div class="pr-5"><strong>423</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? ""}}</div>
           <div>{{ $user->profile->description ?? ""}}</div>
           <div><a href="#">{{ $user->profile->url ?? ""}}</a></div>
       </div>
   </div>

   <div class="row">
       <div class="col-4 pt-5">
           <img src="/uploads/images/default.jpg" alt="" class="m-auto w-100">
       </div>
       <div class="col-4 pt-5">
           <img src="/uploads/images/default.jpg" alt="" class="m-auto w-100">
       </div>
       <div class="col-4 pt-5">
           <img src="/uploads/images/default.jpg" alt="" class="m-auto w-100">
       </div>
   </div>
   
</div>
@endsection
