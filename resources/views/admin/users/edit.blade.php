@extends('layouts.admin')


@section('content')

    <h1>Edit User</h1>

<div class="row">
        <div class="col-sm-3">
                <img width="200" src="{{$user->photo ? $user->photo->file : '/images/avatar.png'}}" alt="">
        </div> 

    <div class="col-sm-9">
        {!! Form::model($user,['method'=>'PATCH','url'=>['/admin/users',$user->id],'files'=>true]) !!}
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
        {!! Form::select('role_id', $roles ,null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active',array(1 => 'active', 0 => 'disable'),$user->is_active,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Profile Photo') !!}
            {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
        {!! Form::submit('Edit User',['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','url'=>['/admin/users',$user->id]]) !!}
        @csrf
        {!! Form::submit('Delete User',['class'=>'btn btn-danger pull-right col-sm-6']) !!}
        {!! Form::close() !!}
        </div>

    </div>


</div>


<div class="row">

    @include('includes/form_errors')

</div>



@endsection