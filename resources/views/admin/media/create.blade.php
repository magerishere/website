@extends('layouts.admin')


@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css" integrity="sha512-bbUR1MeyQAnEuvdmss7V2LclMzO+R9BzRntEE57WIKInFVQjvX7l7QZSxjNDt8bg41Ww05oHSh0ycKFijqD7dA==" crossorigin="anonymous" />

@endsection


@section('content')

<h1>Upload Media</h1>


{!! Form::open(['method'=>'POST','url'=>'admin/media','class'=>'dropzone']) !!}

{!! Form::close() !!}

@endsection




@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone-amd-module.min.js" integrity="sha512-86bjgq1DizICbxRlAlsYC+rV6JzVcGCn9cykHK22GcMVdpPx7DQBb+xipsuzHNbMto00lhFme7s+vFJQAEfcxg==" crossorigin="anonymous"></script>
@endsection