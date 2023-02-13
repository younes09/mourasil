<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
</head>
<body style="background-color: gray;direction: rtl;">
	<div class="container" style="width: 21cm;height: 29.7cm;background-color: white;margin-bottom: 2rem;margin-top: 2rem;">
		<div class="row" style="background-image: url('{{ url('assets/img/header.png') }}');background-position:center;height: 163px;">
			<div class="col-12">
				<h1 class="text-center p-5">INDEX COMMUNICATION</h1>
			</div>
		</div>
		<div class="row p-5">
			<div class="col-3 text-end p-1">
				<img style="height: 150px;width:150px;" src="{{ url('images/'.$condidat->photo) }}" alt="" srcset="">
			</div>
			<div class="col-9 px-5">
				<p style="font-size: larger;">الإسم: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->name }}</b></p>
				<p style="font-size: larger;">اللقب: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->lastname }}</b></p>
				<p style="font-size: larger;">البريد الإلكتروني: <b>{{ $condidat->email }}</b></p>
				<p style="font-size: larger;">الهاتف: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->phone }}</b></p>
				<p style="font-size: larger;">تاريخ الميلاد: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->birth_day }}</b></p>
				<p style="font-size: larger;">مكان الميلاد: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->birth_place }}</b></p>
				<p style="font-size: larger;">العنوان : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->address }}</b></p>
				<p style="font-size: larger;">ر.ب.ت.و/ر.س : &nbsp;&nbsp;&nbsp;<b>{{ $condidat->numeroID }}</b></p>
				<p style="font-size: larger;">المستوى الدراسي: <b>{{ $condidat->grade }}</b></p>
				<p style="font-size: larger;">التخصص: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{ $condidat->spiciality }}</b></p>
			</div>
			<div class="col-12">
				<h5 class="text-center p-5">ID:&nbsp;&nbsp;{{ $condidat->id }}</h5>
			</div>
		</div>
	</div>	
</body>
</html>
