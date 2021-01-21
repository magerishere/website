
	
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
										{!! Form::open(['method'=>'POST','url'=>'admin/posts','files'=>true]) !!}

										<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
											<h1 class="text-center text-dark font-weight-bold mb-10">ایجاد مطلب </h1>
											<br>
											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('photo_id','عکس مطلب',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::file('photo_id',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->

											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('category_name','دسته بندی',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{{-- {!! Form::select('category_id',[''=>'انتخاب دسته بندی'] + $categories,null,['class'=>'form-control form-control-solid form-control-lg','id'=>'selectore']) !!} --}}
													<select name="category_name" id="selectore">
														@foreach ($categories as $category)
															<option value="{{$category->name}}">{{$category->name}}</option>
														@endforeach
														
													</select>
												</div>
												<div class="col-lg-3 col-xl-3">
													{!! Form::text('name',null,['placeholder'=>'Name category','id'=>'nameCategoryInPagePost']) !!}
													<button type="button" onclick="createCategoryInPagePost()">Add</button>
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
												<div class="card card-custom">
													<div class="card-body">
														<textarea name="body" id="kt-ckeditor-1"></textarea>
													</div>
												</div>
											</div>
											<button type="button" onclick="getData()">get</button>

										
											

											<!--end::Group-->
											<div class="row">
											{!! Form::submit('ایجاد پست',['name'=>'submitCreatePostRedirectAdminPage','class'=>'btn btn-primary form-control col-md-6']) !!}
											{{-- {!! Form::button('ایجاد پست دیگر',['class'=>'btn btn-info form-control col-md-6','onclick'=>'submitCreatePostRedirectBack()']) !!} --}}
											{!! Form::submit('ایجاد پست دیگر',['name'=>'submitCreatePostRefreshSamePage','class'=>'btn btn-info form-control col-md-6']) !!}
										</div>

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



