@extends('layout/app')
   @section('content') 
<h3>posts</h3>

@if(count($posts) > 0)
@foreach($posts as $post)
<div class= "border border-default m-2 p-2">
   <div class="row ">
      <div class="col-md-4 col-sm-4 ">

         <img style= "width:70% height:50%" src="/storage/cover_images/{{$post->cover_image}}" alt="post-image">
      </div>
      <div class="col-md-8 col-sm-8 ">
         <h4 style="text-transform :uppercase" > <a href="/posts/{{$post->id}}"> {{$post->title}}</a></h4>
    <small>Written on {{$post->created_at}} </small>
      </div>
   </div>
   
</div>
@endforeach
{{-- {{$posts->links()}} --}}
@else
<p>No Posts Found </p>
@endif
   @endsection 