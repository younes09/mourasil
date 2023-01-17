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
				<form action="{{ route('condidats.update',$condidat->id) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">صورة المترشح</h4><br>
									</div>
									<div class="row mb-4">
										<div class="col-sm-12 col-md-12">
											<input type="file" name="photo" class="dropify" accept=".jpg, .png, .jpeg" data-default-file="{{ url('images/'.$condidat->photo) }}" data-height="200"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">الإسم و اللقب</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-6">
											<input name="name" type="text" class="form-control mb-1" placeholder="الإسم" value="{{ $condidat->name}}" required/>
											@error('name')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-sm-12 col-md-6">
											<input name="lastname" type="text" class="form-control mb-1" placeholder="اللقب" value="{{ $condidat->lastname }}" required/>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">معلومات الإتصال</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-6">
											<input name="email" type="email" class="form-control mb-1" placeholder="البريد الإلكتروني" value="{{ $condidat->email }}" required/>
											@error('email')
												<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
										<div class="col-sm-12 col-md-6">
											<input name="phone" type="text" maxlength="10" minlength="10" class="form-control mb-1" placeholder="الهاتف" value="{{ $condidat->phone }}" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">تاريخ و مكان الإزدياد</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-6">
											<input name="birth_day" type="date" class="form-control mb-1" placeholder="تاريخ الإزدياد" style="text-align: end;" value="{{ $condidat->birth_day }}" required/>
										</div>
										<div class="col-sm-12 col-md-6">
											<input name="birth_place" type="text" class="form-control mb-1" placeholder="مكان الإزدياد" value="{{ $condidat->birth_place }}" required/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">العنوان</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
										<input type="text" name="address" class="form-control mb-1" placeholder="العنوان كامل" value="{{ $condidat->address }}" required>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">ر.ب.ت.و/ر.س</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
											<input name="numeroID" type="text" class="form-control mb-1" placeholder="مثال : 0123489..." value="{{ $condidat->numeroID }}" required/>
										</div>
									</div>
									<div>
										<h4 class="mb-1">تحميل صورة لبطاقة التعريف أو رخصة السياقة</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
											<input name="photoID" type="file" class="dropify" accept=".jpg, .png, .jpeg" data-default-file="{{ url('images/'.$condidat->photoID) }}" data-height="200"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-body">
									<div>
										<h4 class="mb-1">المستوى الدراسي و التخصص</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-6">
											<select name="grade" class="form-control mb-1" id="" required>
												<option {{$condidat->grade == "ليسنس"  ? 'selected' : ''}} value="ليسنس">ليسنس</option>
												<option {{$condidat->grade == "ماستر"  ? 'selected' : ''}} value="ماستر">ماستر</option>
												<option {{$condidat->grade == "دكتورا"  ? 'selected' : ''}} value="دكتورا">دكتورا</option>
											</select>
										</div>
										<div class="col-sm-12 col-md-6">
											<input name="spiciality" type="text" class="form-control mb-1" placeholder="التخصص" value="{{ $condidat->spiciality }}" required/>
										</div>
									</div>
									<div>
										<h4 class="mb-1">تحميل صورة للدبلوم</h4><br>
									</div>
									<div class="row mb-3">
										<div class="col-sm-12 col-md-12">
											<input name="diplom" type="file" class="dropify" accept=".jpg, .png, .jpeg" data-default-file="{{ url('images/'.$condidat->diplom) }}" data-height="200"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 text-center mb-5">
							<button class="btn btn-primary"><span><h5>تحديث المعلومات <i class="typcn typcn-arrow-left-thick"></i></h5></span></button>
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