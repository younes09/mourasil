<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condidat;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('condidat.inscription');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:condidats|max:255',
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required|unique:condidats',
            'birth_day' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'numeroID' => 'required',
            'photoID' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'grade' => 'required',
            'spiciality' => 'required',
            'diplom' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'sex' => 'required',
        ],
        [
            'email.required' => 'حقل البريد الإلكتروني مطلوب.',
            'email.unique' => ' البريد الإلكتروني موجود في قاعدة البينات.',
            'photo.required' => 'حقل صورة المترشح مطلوب.',
            'photo.image' => 'هاذا الحقل مخصص للصور فقط !',
            'name.required' => 'حقل الاسم مطلوب.',
            'lastname.required' => 'حقل اللقب مطلوب.',
            'phone.required' => 'حقل الهاتف مطلوب.',
            'phone.unique' => ' الهاتف موجود في قاعدة البينات لدينا !',
            'birth_day.required' => 'حقل تاريخ الإزدياد مطلوب.',
            'birth_place.required' => 'حقل مكان الإزدياد مطلوب.',
            'address.required' => 'حقل العنوان مطلوب.',
            'numeroID.required' => 'حقل مطلوب.',
            'photoID.required' => 'حقل مطلوب.',
            'photoID.image' => 'هاذا الحقل مخصص للصور فقط !',
            'grade.required' => 'حقل مطلوب.',
            'spiciality.required' => 'حقل مطلوب.',
            'diplom.required' => 'حقل مطلوب.',
            'diplom.image' => 'هاذا الحقل مخصص للصور فقط !',
            'sex.required' => 'حقل مطلوب.',
        ]);

        // Get all inputs
        $input = $request->all();

        // liste of images inputs
        $photos = array('photo','photoID','diplom');

        foreach ($photos as $photo) {
            // test if user has upload an image
            if($request->hasFile($photo)){
                // change request ipute value
                $input[$photo] = $request->file($photo)->store('','save');
            }else{
                // remove images from the request
                unset($input[$photo]);
            }
        }

        Condidat::create($input);

        return back()->with('message','تم التسجيل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
