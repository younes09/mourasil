<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Title -->
	<title> Mourasil </title>
	<!-- Favicon -->
	<link rel="icon" href="{{URL::asset('assets/img/print/logo_lallatv.png')}}" type="image/x-icon"/>
	<!-- Icons css -->
	<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
	<!--  Custom Scroll bar-->
	<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
	<!--  Sidebar css -->
	<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
	<!-- Sidemenu css -->
	<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}">
	<!--- Style css -->
	<link href="{{URL::asset('assets/css-rtl/style.css')}}" rel="stylesheet">
	<!--- Dark-mode css -->
	<link href="{{URL::asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
	<!---Skinmodes css-->
	<link href="{{URL::asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
	<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body style="direction: rtl;background-color: #dcdcdc87;">	
	<img style="width: 100%;" src="{{ url('assets/img/print/header.png') }}" alt="" srcset="">
	<div class="container my-5">
		<div class="row">
			<div class="col-12 text-center">
				<a href="http://lallatv.com" target="_blank" rel="noopener noreferrer"><img src="{{ url('assets/img/print/logo_lallatv.png') }}" alt="" srcset=""></a>
			</div>
		</div>
		@if (session('message'))
		<div class="row justify-content-center" id="success-alert">
			<div class="col-xl-6 col-md-12">
				<div class="alert alert-warning d-flex align-items-center text-danger" role="alert">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
					<div>
						<h5><strong>{{ session('message') }}.</strong></h5> 
					</div>					
				</div>
			</div>
		</div>
		@endif
		<form action="{{ route('inscription.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">???????? ??????????????</h4><br>
							</div>
							<div class="row mb-4">
								<div class="col-sm-12 col-md-12">
									<input type="file" name="photo" class="dropify" accept=".jpg, .png, .jpeg" data-default-file="{{ old('photo') }}" data-height="200" required/>
									@error('photo')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">?????????? ?? ??????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-6">
									<input name="name" type="text" class="form-control mb-1" placeholder="??????????" value="{{ old('name') }}" required/>
									@error('name')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-sm-12 col-md-6">
									<input name="lastname" type="text" class="form-control mb-1" placeholder="??????????" value="{{ old('lastname') }}" required/>
								</div>								
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<div class="form-group">
									  <label for="sex"><h4>??????????</h4></label>
									  <select class="form-select" aria-label="Default select example" name="sex" id="sex" required>
										<option value="h">??????</option>
										<option value="f">????????</option>
									  </select>
									</div>
									{{-- <input name="lastname" type="text" class="form-control mb-1" placeholder="??????????" value="{{ old('lastname') }}" required/> --}}
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">?????????????? ??????????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-6">
									<input name="email" type="email" class="form-control mb-1" placeholder="???????????? ????????????????????" value="{{ old('email') }}" required/>
									@error('email')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-sm-12 col-md-6">
									<input name="phone" type="text" maxlength="10" minlength="10" class="form-control mb-1" placeholder="????????????" value="{{ old('phone') }}" required/>
									@error('phone')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">?????????? ?? ???????? ????????????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-6">
									<input name="birth_day" type="date" class="form-control mb-1" placeholder="?????????? ????????????????" style="text-align: end;" value="{{ old('birth_day') }}" required/>
									@error('birth_day')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
								<div class="col-sm-12 col-md-6">
									<input name="birth_place" type="text" class="form-control mb-1" placeholder="???????? ????????????????" value="{{ old('birth_place') }}" required/>
									@error('birth_place')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">??????????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-12">
									<input type="text" name="address" class="form-control mb-1" placeholder="?????????????? ????????" value="{{ old('address') }}" required>
									@error('address')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">??.??.??.??/??.??</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-12">
									<input name="numeroID" type="text" class="form-control mb-1" placeholder="???????? : 0123489..." value="{{ old('numeroID') }}" required/>
									@error('numeroID')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
							<div>
								<h4 class="mb-1">?????????? ???????? ???????????? ?????????????? ???? ???????? ??????????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-12">
									<input name="photoID" type="file" class="dropify" accept=".jpg, .png, .jpeg" data-height="200" required/>
									@error('photoID')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-12">
					<div class="card">
						<div class="card-body">
							<div>
								<h4 class="mb-1">?????????????? ?????????????? ?? ????????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-6">
									<select name="grade" class="form-control mb-1" id="" value="{{ old('grade') }}" required>
										<option value="??????????">??????????</option>
										<option value="??????????">??????????</option>
										<option value="????????????">????????????</option>
									</select>
								</div>
								<div class="col-sm-12 col-md-6">
									<input name="spiciality" type="text" class="form-control mb-1" placeholder="????????????" value="{{ old('spiciality') }}" required/>
									@error('spiciality')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
							<div>
								<h4 class="mb-1">?????????? ???????? ??????????????</h4><br>
							</div>
							<div class="row mb-3">
								<div class="col-sm-12 col-md-12">
									<input name="diplom" type="file" class="dropify" accept=".jpg, .png, .jpeg" data-height="200" required/>
									@error('diplom')
										<span class="text-danger">{{$message}}</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center mb-5">
					<div class="col-lg-6 col-md-12">
						<div class="checkbox">
							<div class="custom-checkbox custom-control">
								<input type="checkbox" data-checkboxes="mygroup" name="checkbox" class="custom-control-input" id="checkbox-1" required>
								<label for="checkbox-1" class="custom-control-label mt-1"><a href="{{ url('assets/img/print/???????? ??????????.png') }}" target="_blanck">???????? ???????????? ?? ?????????? ??????????</a></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 text-center mb-5">
					<button class="btn btn-primary" onclick="return confirm('???? ?????? ?????????? ???? ???? ?????????????????? ?????????????? ????????????');"><span><h5>?????????? ?????????????????? <i class="typcn typcn-arrow-left-thick"></i></h5></span></button>
				</div>
			</div>
		</form>
	</div>
	<img style="width: 100%;" src="{{ url('assets/img/print/footer.png') }}" alt="" srcset="">

	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
	<!-- JQuery min js -->
	<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<!-- Bootstrap Bundle js -->
	<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- Ionicons js -->
	<script src="{{URL::asset('assets/plugins/ionicons/ionicons.js')}}"></script>
	<!-- Moment js -->
	<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>

	<!-- Rating js-->
	<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>

	<!--Internal  Perfect-scrollbar js -->
	<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
	<!--Internal Sparkline js -->
	<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<!-- Custom Scroll bar Js-->
	<script src="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<!-- right-sidebar js -->
	<script src="{{URL::asset('assets/plugins/sidebar/sidebar-rtl.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/sidebar/sidebar-custom.js')}}"></script>
	<!-- Eva-icons js -->
	<script src="{{URL::asset('assets/js/eva-icons.min.js')}}"></script>
	@yield('js')
	<!-- Sticky js -->
	<script src="{{URL::asset('assets/js/sticky.js')}}"></script>
	<!-- custom js -->
	<script src="{{URL::asset('assets/js/custom.js')}}"></script><!-- Left-menu js-->
	<script src="{{URL::asset('assets/plugins/side-menu/sidemenu.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
</body>
</html>