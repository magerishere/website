@extends('layouts.admin')


@section('content')

    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST','url'=>'/admin/users','files'=>true]) !!}
    @csrf

    <div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('email','Email') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>

    
    <div class="form-group">
    {!! Form::label('role_id','Role') !!}
    {!! Form::select('role_id',['' => 'Choose Option'] + $roles ,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('is_active','Status') !!}
    {!! Form::select('is_active',array(1 => 'active', 0 => 'disable'),0,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file','Profile image') !!}
        {!! Form::file('file', null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
    {!! Form::label('password','Password') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
    {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @include('includes/form_errors')



@endsection