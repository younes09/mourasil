@extends('layouts.master')
@section('css')
<style>
.dot {
    height: 15px;
    width: 15px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
}
</style>
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
				<!-- row -->
				<div class="row">
                    <div class="col-md-10">
                        
                    </div>
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class=" mb-3">جدول المرشحون</h3>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <form action="{{ route('condidats.index') }}" method="get">
                                    @csrf
                                    <div class="row">
                                        {{-- <div class="col-10">
                                            <input name="search" class="form-control" placeholder="ابحث عن أي شيء ..." type="search" value="{{ $search }}"> 
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-primary"><i class="fas fa-search d-none d-md-block"></i></button>    
                                        </div> --}}
                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <div class="input-group">
                                                <input name="search" class="form-control" placeholder="ابحث عن أي شيء ..." type="search" value="{{ $search }}"> <span class="input-group-btn"><button class="btn btn-primary"><span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
                                            </div><!-- input-group -->
                                        </div>
                                    </div>
                                </form>
                            </div>                            
                            <div class="card-body">
                                <div class="table-responsive border-top userlist-table">
                                    <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-10p"><span><h5>#</h5></span></th>
                                                <th class="wd-lg-10p"><span><h5>الحالة</h5></span></th>
                                                <th class="wd-lg-10p"><span><h5>المرشح</h5></span></th>
                                                <th class="wd-lg-20p"><span><h5> </h5></span></th>
                                                <th class="wd-lg-20p"><span><h5> الدبلوم و بطاقة التعريف </h5></span></th>
                                                <th class="wd-lg-20p"><span><h5>البريد</h5></span></th>
                                                <th class="wd-lg-20p text-center"><span><h5>الهاتف</h5></span></th>
                                                <th class="wd-lg-20p"><span><h5>تاريخ الميلاد</h5></span></th>
                                                <th class="wd-lg-20p"><span><h5>المستوى الدراسي</h5></span></th>
                                                <th class="wd-lg-20p text-center"><h5>تحكم</h5></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($condidats as $condidat)
                                            <tr>
                                                <td>{{ $condidat->uuid }}</td>
                                                <td>
                                                    @if ($condidat->state == 's') <span class="dot bg-warning" data-placement="top" data-toggle="tooltip" title="في الإنتظار"></span> @endif
                                                    @if ($condidat->state == 'a') <span class="dot bg-success" data-placement="top" data-toggle="tooltip" title="مفعل"></span> @endif
                                                    @if ($condidat->state == 'e') <span class="dot bg-secondary" data-placement="top" data-toggle="tooltip" title="مكتمل"></span> @endif
                                                    @if ($condidat->state == 'b') <span class="dot bg-danger" data-placement="top" data-toggle="tooltip" title="محظور"></span> @endif
                                                </td>
                                                <td>
                                                    <img alt="avatar" class="rounded-circle avatar-md mr-2" src=" {{ url('images/'.$condidat->photo) }}">
                                                </td>
                                                <td>
                                                    {{ $condidat->name }} {{ $condidat->lastname }}
                                                </td>
                                                <td>
                                                    <img style="height: 5rem;margin: 1rem;" src=" {{ url('/images',$condidat->diplom) }}" alt="" srcset="">
                                                    <img style="height: 5rem;margin: 1rem;" src=" {{ url('/images',$condidat->photoID) }}" alt="" srcset="">
                                                </td>
                                                <td>
                                                    <a href="mailto:{{ $condidat->email }}">{{ $condidat->email }}</a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="tel:{{ $condidat->phone }}">{{ $condidat->phone }}</a>
                                                </td>
                                                <td>
                                                    {{ $condidat->birth_day }}
                                                </td>
                                                <td>
                                                    <h5>{{ $condidat->grade }}</h5>
                                                </td>
                                                <td>
                                                    <form action="{{ route('condidats.destroy',$condidat->id) }}" method="POST">
                                                        {{-- Show condidats --}}
                                                        <a class="btn btn-info" href="{{ route('condidats.show',$condidat->id) }}"><i class="las la-eye"></i></a>
                                                        {{-- Edit condidats --}}
                                                        <a class="btn btn-primary" href="{{ route('condidats.edit',$condidat->id) }}"><i class="las la-pen"></i></a> 
                                                        {{-- Delet condidats --}}
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('هل أنت متأكد أنك تريد حذف هذا المرشح؟');"><i class="las la-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card mg-b-20 text-center" style="border: none;">
                                                        <div class="card-body">
                                                            <img src="http://localhost/mourasil/public/assets/img/svgicons/note_taking.svg" alt="" class="wd-35p">
                                                            <h5 class="mg-b-10 mg-t-15 tx-18">لايوجد معلومات</h5>
                                                            <a href="#" class="text-muted">حاول مرة أخرى</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <div class="d-flex justify-content-start">
                                    {!! $condidats->links() !!}
                                </div>
                            </div>
                        </div>
                    </div><!-- COL END -->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection