@extends('layouts.admin');



@section('content')

@if(Session::has('created_post'))

<p class="bg-success">{{session('created_post')}}</p>

@endif

@if(Session::has('updated_post'))

<p class="bg-info">{{session('updated_post')}}</p>

@endif

@if(Session::has('deleted_post'))

<p class="bg-danger">{{session('deleted_post')}}</p>

@endif

<h1>Posts</h1>


<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Photo</th>        
        <th>Owner</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
      @if($posts)

      @foreach($posts as $post)

      <tr>
        <td>{{$post->id}}</td>
        <td><img src="{{$post->photo->file}}" alt="Not Found" width="100"></td>        
        <td>{{$post->user->name}}</td>
        <td>{{$post->category_id}}</td>
        <td><a href="/admin/posts/{{$post->id}}/edit">{{$post->title}}</a></td>
        <td>{{Str::limit($post->body,30)}}</td>        
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
      </tr>
      @endforeach

      @endif

    </tbody>
</table>

@endsection()