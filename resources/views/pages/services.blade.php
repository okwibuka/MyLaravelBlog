{{-- @extends('layout/app')
@section('content')
    <h1>{{$services}}</h1>
    
    @if(count($services) > 0)
    <ul class="list-group">
    @foreach ($services as $service)
    <li class= "list-group-item">{{$service}} </li>
     @endforeach   
    </ul>
    @endif
@endsection --}}

@extends('layout/app')

@section('content')
    

    <h1>{{$services}}</h1>
    <p>this is news page of laravel</p>

    @endsection
    
