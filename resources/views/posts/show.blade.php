@extends('layout/app')
   @section('content') 

   <a href="/posts" class="btn btn-light">Go back </a> 
<h4 style="text-transform :uppercase" class="m-3">{{$post->title}}</h4>

<img style= "width:50% height:50% " src="/storage/cover_images/{{$post->cover_image}}" alt="post-image">

<div>
    {{$post->body}}
</div>
<hr>
<small>written on {{$post->created_at}}</small>

<hr>  

@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)

<a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="float: right">Edit</a>
 
{!! Form::open(['action' => ['App\Http\Controllers\postsController@destroy' , $post->id], 
'method' => 'POST' , 'class' => 'pull-right']) !!}
{{Form::hidden('_method' , 'DELETE')}}
{{Form::submit('delete' , ['class' => 'btn btn-danger mt-3'])}}

{!!Form::close()!!}

{{-- -------------------------------------------- --}}



@endif
@else
{!!Form::open(['action' => 'App\Http\Controllers\CommentsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
{{Form::textarea('body', '', ['class' => 'form-control comment-ctrl' ,'placeholder' => 'enter comment'])}}   
</div>
{{Form::submit('submit' , ['class' => 'btn btn-primary mt-3'])}}

{!!Form::close()!!}

@endif



@endsection