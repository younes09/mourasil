@extends('layouts.master')
@section('css')
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					</div>
					{{-- <div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				@if (session('message'))
				<div class="row" id="success-alert">
					<div class="col-xl-6 col-md-12">
						<div class="alert alert-success" role="alert">
							<h5><strong>{{ session('message') }}.</strong></h5>                        
						</div>
					</div>
				</div>
				@endif
				<!-- row -->
				<form action="{{ url('/condidats') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">???????? ??????????????</h4><br>
									</div>
									<div class="row mb-4">
										<div class="col-6">
											<div class="form-group">
												<select class="form-control" name="state" id="">
													<option value="s">???? ????????????????</option>
													<option value="a">??????</option>
													<option value="e">??????????</option>
													<option value="b">??????????</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">???????? ??????????????</h4><br>
									</div>
									<div class="row mb-4">
										<div class="col-sm-12 col-md-12">
											<input type="file" name="photo" class="dropify" accept=".jpg, .png, .jpeg" data-height="200" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-12">
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
											  <select class="form-control" aria-label="Default select example" name="sex" id="sex">
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
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">?????????? ?? ???????? ????????????????</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-6">
											<input name="birth_day" type="date" class="form-control mb-1" placeholder="?????????? ????????????????" style="text-align: end;" value="{{ old('birth_day') }}" required/>
										</div>
										<div class="col-sm-12 col-md-6">
											<input name="birth_place" type="text" class="form-control mb-1" placeholder="???????? ????????????????" value="{{ old('birth_place') }}" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">??????????????</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
										<input type="text" name="address" class="form-control mb-1" placeholder="?????????????? ????????" value="{{ old('address') }}" required>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">??.??.??.??/??.??</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
											<input name="numeroID" type="text" class="form-control mb-1" placeholder="???????? : 0123489..." value="{{ old('numeroID') }}" required/>
										</div>
									</div>
									<div>
										<h4 class="mb-1">?????????? ???????? ???????????? ?????????????? ???? ???????? ??????????????</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
											<input name="photoID" type="file" class="dropify" accept=".jpg, .png, .jpeg" data-height="200" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-12">
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
										</div>
									</div>
									<div>
										<h4 class="mb-1">?????????? ???????? ??????????????</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
											<input name="diplom" type="file" class="dropify" accept=".jpg, .png, .jpeg" data-height="200" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 text-center mb-5">
							<button class="btn btn-primary"><span><h5>?????????? ?????????????????? <i class="typcn typcn-arrow-left-thick"></i></h5></span></button>
						</div>
					</div>
				</form>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
@endsection