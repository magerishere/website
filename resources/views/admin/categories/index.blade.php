@extends('layouts.admin')


@section('content')


<h1>Categories</h1>

<div class="col-sm-3">

    {!! Form::open(['method'=>'POST','url'=>'admin/categories']) !!}

    <div class="form-group">
        {!! Form::label('name','Name') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Category',['class'=>'btn btn-primary col-sm-12']) !!}
    </div>

    {!! Form::close() !!}

</div>



@if($categories)
<div class="col-sm-9">

    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Edit Name</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Delete</th>            
          </tr>
        </thead>
        @foreach($categories as $category)
        <tbody>
          <tr>
            <td>{{$category->id}}</td>
            <td>
                    {!! Form::model($category,['method'=>'PATCH','url'=>['admin/categories',$category->id]]) !!}
                    
                        <div class="form-group">
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                </td>
                <td>
                        <div class="form-group">
                            {!! Form::submit('Edit',['class'=>'btn btn-primary pull-right col-sm-12']) !!}
                        </div>
                 
                    {!! Form::close() !!}
                </td>
            
            <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no Date'}}</td>
            <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'no Date'}}</td>
            <td>
                {!! Form::open(['method'=>'DELETE','url'=>['admin/categories',$category->id]]) !!}
                
                    <div class="form-group">
                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    </div>
                    
                {!! Form::close() !!}    
            </td>            
          </tr>
        </tbody>
        @endforeach
      </table>
     

</div>
@endif

@endsection