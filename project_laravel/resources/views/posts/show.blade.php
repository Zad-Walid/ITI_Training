@extends('layout.app')

@section('title',"Show Post")


@section('content')
<ul>

    <li>{{$post->title}}</li>  
    <li>{{$post->body}}</li> 
    <li>{{$post->created_at}}</li> 
    <li>{{$post->posted_by}}</li> 
    

</ul>

@endsection