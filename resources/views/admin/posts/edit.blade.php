@extends('layout.index')


@section('content')

								
<div class="card card-custom card-transparent">
	<div class="card-body p-0">
		<!--begin::Wizard-->
		<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">

			<!--begin::Card-->
			<div class="card card-custom card-shadowless rounded-top-0">
				<!--begin::Body-->
				<div class="card-body p-0">
					<div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
						<div class="col-xl-12 col-xxl-10">
							<!--begin::Wizard Form-->
							
								<div class="row justify-content-center">
									<div class="col-xl-9">
										<!--begin::Wizard Step 1-->
										{!! Form::model($post,['method'=>'PATCH','url'=>['admin/posts',$post->id],'files'=>true]) !!}

										<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
											<h1 class="text-center text-dark font-weight-bold mb-10">ویرایش مطلب </h1>
											<br>
											<!--begin::Group-->
											<div class="form-group row"><img width="800" height="300" src="{{$post->photo->file}}" alt="Not found"></div>
											<div class="form-group row">
												{!! Form::label('photo_id','عکس مطلب',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::file('photo_id',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->

											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('category_id','دسته بندی',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::select('category_id',$categories,null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->


											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('title','عنوان مطلب',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::text('title',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->
							
											<!--begin::Group-->

											<div class="form-group row">
												{!! Form::label('body','شرح مطلب',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{{-- {!! Form::textarea('body',null,['class'=>'form-control form-control-solid form-control-lg']) !!} --}}
													<textarea name="body" id="kt-ckeditor-1">{{$post->body}}</textarea>
												</div>
											</div>
											<!--end::Group-->
									
											{!! Form::submit('ویرایش مطلب',['class'=>'btn btn-primary form-control']) !!}
											@foreach ($errors->all() as $error)

												<p class="bg-warning form-control">{{$error}}</p>

											@endforeach
										</div>
										<!--end::Wizard Step 1-->
										{!! Form::close() !!}
									</div>
								</div>
							
							<!--end::Wizard Form-->
						</div>
					</div>
				</div>
				<!--end::Body-->
			</div>
			<!--end::Card-->
		</div>
		<!--end::Wizard-->
	</div>
</div>
<!--end::Card-->



@endsection