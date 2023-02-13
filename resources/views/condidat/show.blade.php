<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="shortcut icon" href="{{ url('assets/img/print/logo_lallatv.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            background-color: rgb(212, 211, 211);
            font-family: 'Katibeh', cursive;
        }

        .page{
            width: 21cm;
            height: 29.7cm;
            background-color: white;
            position: relative;
            margin: auto;
        }

        .header .footer{
            width: 21cm;
        }

        .footer{
            position: absolute;
            bottom: 0;
        }

        img{
            max-width: 100%;
        }

        .image-text{
            top: 0.5rem;
            position: absolute;
            left: 0; 
            right: 0; 
            margin-left: auto; 
            margin-right: auto; 
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="page">
        <!-- heder -->
        <div class="header">
            <img src="{{ url('assets/img/print/logo_lallatv.png') }}" 
            style="position: absolute;
            height: 95px;
            right: 80px;
            top: 10px;
            background-color: #ffffffed;
            border-radius: 10px;" 
            alt="" srcset="">
            <div class="image-text text-light">
                <h1>إستمارة التسجيل</h1>
                <h4>REGISTRATION FORM</h4>
            </div>
            <img src="{{ url('assets/img/print/header.png') }}" alt="" srcset="">
        </div>
        <!-- end header -->

        <!-- body -->
        <div class="body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: x-large;color: #00a9f9;">First Name</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">الإسم</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->name }}</h4></div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: x-large;color: #00a9f9;">Last Name</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">اللقب</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->lastname }}</h4></div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-4">
                                <div style="font-size: x-large;color: #00a9f9;">ID No</div>                                
                            </div>
                            <div class="col-8 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">رقم بطاقة التعريف</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->numeroID }}</h4></div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: x-large;color: #00a9f9;">Date Of Birth</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">تاريخ الميلاد</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->birth_day }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 px-5 text-end">
                                {{-- <img class="img-responsive" style="height: 45mm;" src="{{ url('assets/img/print/thumbinal.png') }}" alt="" srcset="">                                 --}}
                                <img class="img-responsive" style="height: 45mm;" src="{{ url('images/'.$condidat->photo) }}" alt="" srcset="">                                
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="row px-5">
                                    <div class="col-6">
                                        <div style="font-size: x-large;color: #00a9f9;">Phone</div>                                
                                    </div>
                                    <div class="col-6 text-end">
                                        <div style="font-size: x-large;color: #00a9f9;">الهاتف</div>                                
                                    </div>
                                </div>
                                <div class="row px-5 mb-4">
                                    <div class="col-12 text-center text-uppercase">
                                        <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->phone }}</h4></div>
                                    </div>
                                </div>
                                <div class="row px-5">
                                    <div class="col-6 fs-2">
                                        <div class="form-check form-check-inline" style="color: #00a9f9;">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" @if($condidat->sex == 'h') checked @endif onclick="return false;">
                                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                        </div>                              
                                    </div>
                                    <div class="col-6 fs-2">     
                                        <div class="form-check form-check-inline" style="color: #00a9f9;">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" @if($condidat->sex == 'f') checked @endif onclick="return false;">
                                            <label class="form-check-label" for="inlineCheckbox1">Femal</label>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: x-large;color: #00a9f9;">Address</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">العنوان</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                {{-- <div style="height: 73px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4> .حي منقوش قطعة رقم 64 تعاونية أول نوفمبر. بئر خادم. الجزائر</h4></div> --}}
                                <div style="height: 73px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->address }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: x-large;color: #00a9f9;">E-Mail</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">البريد الإلكتروني</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->email }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: x-large;color: #00a9f9;">Specialization</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">التخصص</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-nowrap">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4> {{ $condidat->spiciality }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row px-5">
                            <div class="col-4">
                                <div style="font-size: x-large;color: #00a9f9;">Level</div>                                
                            </div>
                            <div class="col-8 text-end">
                                <div style="font-size: x-large;color: #00a9f9;">المستوى الجامعي</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 40px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->grade }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <h5 class="text-end"> .بالإمضاء ، أنت توافق على قواعد برنامج التدريب والقواعد الداخلية للمؤسسة</h5>
                        <h5 class="text-end">Approving the internship rules and the internal law of the receiving institution.</h5>
                    </div>
                    <div class="col-3 text-center">
                        <h4 class="text-decoration-underline"> Signing  الإمضاء</h4>
                        <h5>X</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- end body -->

        <!-- footer -->
        <div class="footer">
            <img src="{{ url('assets/img/print/footer.png') }}" alt="" srcset="">
        </div>
        <!-- end footer -->
    </div>
    <div class="page mt-5">
        <img src="{{ url('assets/img/print/صحفي متربص.png') }}" alt="" srcset="">
    </div>
    <script>
        window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" 
    crossorigin="anonymous"></script>
</body>
</html>