@if (Session::has('created_post'))
	<p class="text-center bg-success" style="color: white">{{session('created_post')}}</p>
@endif

@if (Session::has('updated_post'))
	<p class="text-center bg-primary" style="color: white">{{session('updated_post')}}</p>
@endif





@foreach ($posts as $post)
	
		<!--begin::Card-->
		<div class="card card-custom gutter-b">
			<div class="card-body">
				<!--begin::Top-->
				<div class="d-flex">
					<!--begin::Pic-->
					<div class="flex-shrink-0 mr-7">
						<div class="symbol symbol-50 symbol-lg-120">
							<a href="/admin/posts/{{$post->id}}/edit"><img width="150" src="{{$post->photo->file}}" alt="Pic" ></a>
						</div>
					</div>
					<!--end::Pic-->
					<!--begin: Info-->
					<div class="flex-grow-1">
						<!--begin::Title-->
						<div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
							<!--begin::User-->
							<div class="mr-3">
								<!--begin::Name-->
								<a href="/admin/posts/{{$post->id}}/edit" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$post->title}}
								<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
								<!--end::Name-->
								<!--begin::Contacts-->
								<div class="d-flex flex-wrap my-2">
									<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
									<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
									<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<mask fill="white">
													<use xlink:href="#path-1" />
												</mask>
												<g />
												<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>مدیریت </a>
									<a href="#" class="text-muted text-hover-primary font-weight-bold">
									<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>کارمند</a>
								</div>
								<!--end::Contacts-->
							</div>
							<!--begin::User-->
							<!--begin::Actions-->
							<div class="my-lg-0 my-1">
								<div class="row">
						
								{!! Form::open(['method'=>'DELETE','url'=>['admin/posts',$post->id]]) !!}
								@csrf
								{!! Form::submit('حذف',['class'=>'btn btn-danger']) !!}
								{!! Form::close() !!}
								</div>
							
							</div>
							<!--end::Actions-->
						</div>
						<!--end::Title-->
						<!--begin::Content-->
						<div class="d-flex align-items-center flex-wrap justify-content-between">
							<!--begin::Description-->
							<div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">{{ str_replace(['<p>','</p>','<br>','&nbsp;'],'',$post->body) }}</div> <!-- Str::limit($post->body,150) -->
							<!--end::Description-->
							<!--begin::Progress-->
							<div class="d-flex mt-4 mt-sm-0">
								<span class="font-weight-bold mr-4">فرایند</span>
								<div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
									<div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="font-weight-bolder text-dark ml-4">78%</span>
							</div>
							<!--end::Progress-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Info-->
				</div>
				<!--end::Top-->
				<!--begin::Separator-->
				<div class="separator separator-solid my-7"></div>
				<!--end::Separator-->
				<!--begin::Bottom-->
				<div class="d-flex align-items-center flex-wrap">
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">درآمد</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">$</span>249,500</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">هزینه</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">$</span>164,700</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">نت</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">$</span>782,300</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column flex-lg-fill">
							<span class="text-dark-75 font-weight-bolder font-size-sm">73 درخواست</span>
							<a href="#" class="text-primary font-weight-bolder">مشاهده</a>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column">
							<span class="text-dark-75 font-weight-bolder font-size-sm">648 نظر</span>
							<a href="#" class="text-primary font-weight-bolder">مشاهده</a>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill my-1">
						<span class="mr-4">
							<i class="flaticon-network icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="symbol-group symbol-hover">
							<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
								<img alt="Pic" src="assets/media/users/300_25.jpg" />
							</div>
							<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
								<img alt="Pic" src="assets/media/users/300_19.jpg" />
							</div>
							<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
								<img alt="Pic" src="assets/media/users/300_22.jpg" />
							</div>
							<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
								<img alt="Pic" src="assets/media/users/300_23.jpg" />
							</div>
							<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
								<img alt="Pic" src="assets/media/users/300_18.jpg" />
							</div>
							<div class="symbol symbol-30 symbol-circle symbol-light" data-toggle="tooltip" title="More users">
								<span class="symbol-label font-weight-bold">5+</span>
							</div>
						</div>
					</div>
					<!--end: Item-->
				</div>
				<!--end::Bottom-->
			</div>
		</div>
	
	
@endforeach

		<!--end::Card-->		
		<!--begin::Pagination-->
		<div class="card card-custom">
			<div class="card-body py-7">
				<!--begin::Pagination-->
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="d-flex flex-wrap mr-3">
						<div class="pagination">
							{{$posts->links()}}
						</div>
					</div>
					<div class="d-flex align-items-center">
						<select id="optionValue" onchange="onChangeOptionSelector()" class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary" style="width: 75px;">
							<option value="">Selected Option</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="5">5</option>
							<option value="10">10</option>
						</select>
						<span class="text-muted">نمایش 5 از {{$totalPosts}}</span>
					</div>

				</div>
				<!--end:: Pagination-->
			</div>
		</div>
		<!--end::Pagination-->
	
	<!--end::Content-->
	