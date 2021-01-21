	
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
										{!! Form::open(['method'=>'POST','url'=>'admin/users','files'=>true]) !!}
										@csrf

										<div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
											<h5 class="text-dark font-weight-bold mb-10">User's Profile Details:</h5>
											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('photo_id','Avatar',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::file('photo_id',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->
											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('name','Full Name',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::text('name',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->
							
											<!--begin::Group-->

											<div class="form-group row">
												{!! Form::label('email','Email',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::text('email',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
													<span class="form-text text-muted">example@gmail.com</span>
												</div>
											</div>
											<!--end::Group-->

											<!--begin::Group-->
											
											<div class="form-group row">
												{!! Form::label('role_id','Role',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::select('role_id',[''=>'Choose Role'] + $roles,null,['class'=>'form-control form-control-solid form-control-lg']) !!}
												</div>
											</div>
											<!--end::Group-->


									
											<!--begin::Group-->
											<div class="form-group row">
												{!! Form::label('password','Password',['class'=>'col-xl-3 col-lg-3 col-form-label']) !!}
												<div class="col-lg-9 col-xl-9">
													{!! Form::password('password',null,['class'=>'form-control form-control-solid form-control-lg']) !!}
													<span class="form-text text-muted">More 8 Character</span>
												</div>
											</div>
											<!--end::Group-->
											{!! Form::submit('Create user',['class'=>'btn btn-primary form-control']) !!}

											<br>

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


		
