@extends('layout/app')
   @section('content') 
<h3> create posts</h3>

{!! Form::open(['action' => ['App\Http\Controllers\postsController@update' , $post->id], 'method' => 'POST' ,'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
     {{Form::label('title' , 'Title')}} 
     {{Form::text('title', $post ->title, ['class' => 'form-control' ,'placeholder' => 'title'])}}   
    </div>

    <div class="form-group">
        {{Form::label('body' , 'Body')}} 
        {{Form::textarea('body', $post ->body, ['class' => 'form-control' ,'placeholder' => 'body-text'])}}   
       </div>

       <div class="form-group mt-2">
         {{Form::file('cover_image')}}
       </div>

       {{Form::hidden('_method' , 'PUT')}}
       {{Form::submit('submit', ['class' => 'btn btn-primary mt-2'])}}
{!! Form::close() !!}

   @endsection