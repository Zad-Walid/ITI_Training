
@extends('layout.app')

@section('title',"Edit Post")


@section('content')

<form method ="post" action="/posts/{{$post['id']}}" >

    @csrf
    @method('put')
    
Title<input type="text" name="title" class="form-control" placeholder="Title" value="{{$post->title}}"></br>
Body<input type="text" name= "body" class="form-control" placeholder="Body" value="{{$post->body}}"></br>
Posted by <input type="text" name="posted_by" class="form-control" placeholder="Posted by" value="{{$post->posted_by}}"></br>
Created At <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{$post->created_at}}"></br>


<input type="submit" values="Update"  class="btn btn-primary mb-3">

</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection