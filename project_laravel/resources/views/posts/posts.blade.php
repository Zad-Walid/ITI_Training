

@extends('layout.app')
@section('title',"list all posts")


@section('content')

<a href="/posts/create">Craete New Post</a>

<table border="2" class="table">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Body</th>
    <th>Posted by</th>
    <th>Created At</th>
    
    
    <th>option1</th>
    <th>option2</th>
    <th>option3</th>
</tr>

@foreach($posts as $post)
<tr>

    <td>{{$post->id}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->body}}</td>
    <td>{{$post->user->name}}</td>
    <td>{{$post->created_at}}</td>
   
    
    
    
    

    <td><a class="btn btn-primary mb-3" href="/posts/{{$post['id']}}">View</a></td> 
    <td><a class="btn btn-primary mb-3" href="/posts/{{$post['id']}}/edit">Edit</a></td> 
    <td>
    <form action="/posts/{{$post['id']}}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

    </td> 

</tr>    
@endforeach

</table>
@endsection

