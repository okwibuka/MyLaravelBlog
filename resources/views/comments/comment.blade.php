@extends('layout/app')
   @section('content') 
   {{-- <a href="/posts/{$post->id}" class="btn btn-light">Go Back</a> --}}
   @if(count($Comments) > 0)

   @foreach($Comments as $Comment)
   <div class= "border border-default m-2 p-2">
      <div class="row ">
         <div class="col-md-4 col-sm-4 ">
<h4> {{$Comment->body}} </h4>
   <small> written on {{$Comment->created_at}} </small>
         </div>
        </div>
    </div>

@endforeach
   @else
   <p>no comment found </p>
   @endif
   @endsection