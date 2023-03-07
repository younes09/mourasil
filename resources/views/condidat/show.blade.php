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
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Katibeh&display=swap" rel="stylesheet"> --}}
    <style>
        body{
            margin: 0;
            background-color: rgb(212, 211, 211);
            font-family: 'Tajawal', sans-serif;
            /* font-family: 'Katibeh', cursive; */
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
            <img src="{{ url('assets/img/print/lallatv_logo.png') }}" style="position: absolute;height: 95px;right: 42px;top: 12px;" alt="" srcset="">
            <img src="{{ url('assets/img/print/lallatv_logo.png') }}" style="position: absolute;height: 95px;left: 42px;top: 12px;" alt="" srcset="">
            <div class="image-text text-light">
                <h1 style="font-size: 56px"><b>إستمارة التسجيل</b></h1>
                <h6><b>REGISTRATION FORM</b></h6>
            </div>
            <img src="{{ url('assets/img/print/header.png') }}" alt="" srcset="">
        </div>
        <!-- end header -->

        <!-- body -->
        <div class="body">
            <div class="container-fluid">
                {{-- Barcode row print --}}
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <svg id="barcode"></svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: 22px;color: #00a9f9;">First Name</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">الإسم</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->name }}</h4></div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: 22px;color: #00a9f9;">Last Name</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">اللقب</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->lastname }}</h4></div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-4">
                                <div style="font-size: 22px;color: #00a9f9;">ID No</div>                                
                            </div>
                            <div class="col-8 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">رقم بطاقة التعريف</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->numeroID }}</h4></div>
                            </div>
                        </div>
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: 22px;color: #00a9f9;">Date Of Birth</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">تاريخ الميلاد</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->birth_day }}</h4></div>
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
                                        <div style="font-size: 22px;color: #00a9f9;">Phone</div>                                
                                    </div>
                                    <div class="col-6 text-end">
                                        <div style="font-size: 22px;color: #00a9f9;">الهاتف</div>                                
                                    </div>
                                </div>
                                <div class="row px-5 mb-4">
                                    <div class="col-12 text-center text-uppercase">
                                        <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->phone }}</h4></div>
                                    </div>
                                </div>
                                <div class="row px-5">
                                    <div class="col-6 fs-4">
                                        <div class="form-check form-check-inline" style="color: #00a9f9;">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" @if($condidat->sex == 'h') checked @endif onclick="return false;">
                                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                        </div>                              
                                    </div>
                                    <div class="col-6 fs-4">     
                                        <div class="form-check form-check-inline" style="color: #00a9f9;">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" @if($condidat->sex == 'f') checked @endif onclick="return false;">
                                            <label class="form-check-label" for="inlineCheckbox1">Female</label>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: 22px;color: #00a9f9;">Address</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">العنوان</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                {{-- <div style="height: 73px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4> .حي منقوش قطعة رقم 64 تعاونية أول نوفمبر. بئر خادم. الجزائر</h4></div> --}}
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h5>{{ $condidat->address }}</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: 22px;color: #00a9f9;">E-Mail</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">البريد الإلكتروني</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center">
                                <div style="height: 37px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->email }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row px-5">
                            <div class="col-6">
                                <div style="font-size: 22px;color: #00a9f9;">Specialization</div>                                
                            </div>
                            <div class="col-6 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">التخصص</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-nowrap">
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h6> {{ $condidat->spiciality }}</h6></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row px-5">
                            <div class="col-4">
                                <div style="font-size: 22px;color: #00a9f9;">Level</div>                                
                            </div>
                            <div class="col-8 text-end">
                                <div style="font-size: 22px;color: #00a9f9;">المستوى الجامعي</div>                                
                            </div>
                        </div>
                        <div class="row px-5 mb-4">
                            <div class="col-12 text-center text-uppercase">
                                <div style="height: 32px;width: 100%;border-style: solid;border-color: rgb(178 237 255);border-radius: 5px;"><h4>{{ $condidat->grade }}</h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-7 px-4">
                            <table class="table table-bordered table-inverse table-responsive">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th scope="col" style="border-width: 3px 3px;" class="text-center">تحقق منه</th>
                                        <th scope="col" style="border-width: 3px 3px;" class="text-center">تاريخ البداية</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border-width: 3px 3px;"><br><br></td>
                                            <td style="border-width: 3px 3px;"></td>
                                            
                                        </tr>
                                    </tbody>
                            </table>
                            </div>
                            <div class="col-4 text-center">
                                <h4 class="text-decoration-underline"> Signing  الإمضاء</h4>
                                <h5>x</h5>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- end body -->

        <!-- footer -->
        <div class="footer">
            <div class="image-text text-light">
                <h6 class="text-center"> .بالإمضاء ، أنت توافق على قواعد برنامج التدريب والقواعد الداخلية للمؤسسة</h6>
                <h6 class="text-center">Approving the internship rules and the internal law of the receiving institution.</h6>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>
    <script>
        JsBarcode("#barcode", "{{ $condidat->uuid }}", {
            textPosition: "top",
            lineColor: "#000",
            width: 1,
            height: 25,
            displayValue: true
        });
    </script>
</body>
</html>