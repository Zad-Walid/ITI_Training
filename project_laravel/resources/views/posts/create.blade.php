
@extends('layout.app')

@section('title',"Create A New Post")


@section('content')

<form method ="post" action="/posts">
    @csrf
Title<input type="text" name="title" class="form-control" placeholder="Title"></br>
Body<input type="text" name= "body" class="form-control" placeholder="Body"></br>
Posted by <input type="text" name="posted by" class="form-control" placeholder="Posted by"></br>
Created At <input type="text" name="created at" class="form-control" placeholder="Created At"></br>


<input type="submit" values "Add" class="btn btn-primary mb-3">
</form>


@foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

@endsection