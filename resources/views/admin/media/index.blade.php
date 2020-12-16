@extends('layouts.admin')


@section('content')



<h1>Media</h1>



@if(Session::has('deleted_photo'))

<p class="bg-danger">{{session('deleted_photo')}}</p>

@endif

<div class="col-sm-12">
    <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Source</th>
                <th>Picture</th>
                <th>Created at</th>
                <th>Delete Media</th>
            </tr>
            </thead>
            @foreach($photos as $photo)
            
            <tbody>
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->file}}</td>
                <td><img width="100" src="{{$photo->file}}" alt="No photo"></td>
                <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'No date'}}</td>
                <td>
                    {!! Form::open(['method'=>'DELETE','url'=>['/admin/media',$photo->id]]) !!}

                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}

                    {!! Form::close() !!}

                </td>
            </tr>
            </tbody>
            @endforeach
    </table>
</div>

@endsection