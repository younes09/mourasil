<?php

namespace App\Http\Controllers;

use App\Mail\LallatvMail;
use App\Mail\MourasilMail;
use App\Models\Condidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index($uuid)
    {
        $condidat = Condidat::where('uuid',$uuid)->get()[0];
        
        $mailDataMourasil = [
            'title' => 'Mail from lallatv.com',
            'body' => 'Thnk you '.$condidat->name.' '.$condidat->lastname.' for you candidacy in lalla tv.'
        ];

        $mailDataLallatv = [
            'title' => 'Mail from mourasil',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to($condidat->email)->send(new MourasilMail($mailDataMourasil));
        Mail::to('younesouznadji@gmail.com')->send(new LallatvMail($mailDataLallatv));

        return redirect(url('/'))->with('message','تم التسجيل بنجاح, يرجى تفقد الإيميل الخاص بك');

           
        dd("Email is sent successfully.");
    }
}
