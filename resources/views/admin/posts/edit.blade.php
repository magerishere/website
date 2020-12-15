@extends('layouts.admin');



@section('content')


<h1>Edit Post</h1>

<div class="row">
    <div class="col-sm-3">
            <img width="200" src="{{$post->photo->file}}" alt="">
    </div> 

<div class="col-sm-9">
    {!! Form::model($post,['method'=>'PATCH','url'=>['/admin/posts',$post->id],'files'=>true]) !!}
    @csrf

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    
    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',[''=>'Choose Optiion'] + $categories,null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('photo_id','Photo') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Edit Post',['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

    
    {!! Form::open(['method'=>'DELETE','url'=>['admin/posts',$post->id]]) !!}
    @csrf
    <div class="form-group">
    {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-6']) !!}
    </div>
    {!! Form::close() !!}

    </div>
</div>


<div class="row">

@include('includes/form_errors')

</div>


@endsection