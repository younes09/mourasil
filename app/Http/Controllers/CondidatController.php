<?php

namespace App\Http\Controllers;

use App\Models\Condidat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CondidatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search', '');

        $condidats = Condidat::search($search)->paginate(10);   // ->latest()// ->withQueryString();

        return view('condidat.index', compact('condidats', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condidat.create');
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
            'sex' => 'required',
            'lastname' => 'required',
            'phone' => 'required|unique:condidats',
            'birth_day' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'numeroID' => 'required',
            'photoID' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'grade' => 'required',
            'spiciality' => 'required',
            'diplom' => 'required|image|mimes:png,jpg,jpeg|max:2048'
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

        $input['uuid'] = Str::random(16);
        Condidat::create($input);

        return back()->with('message','تم التسجيل بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function show(Condidat $condidat)
    {
        return view('condidat.show',compact('condidat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function edit(Condidat $condidat)
    {
        return view('condidat.edit',compact('condidat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condidat $condidat)
    {
        // Get all inputs
        $input = $request->all();

        // liste of images inputs
        $photos = array('photo','photoID','diplom');
        
        foreach ($photos as $photo) {
            // test if user has upload an image
            if($request->hasFile($photo)){
                // check if user have a file stored && database table is non NULL
                if(file_exists(public_path('images/'.$condidat->$photo)) && $condidat->$photo != null) {
                    // delet the file from storege
                    unlink('images/'.$condidat->$photo);
                }
                // change request ipute value
                $input[$photo] = $request->file($photo)->store('','save');
            }else{
                // remove images from the request
                unset($input[$photo]);
            }
        }

        // excute the update
        $condidat->update($input);

        return back()->with('message','تم تحديث المعلومات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condidat  $condidat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condidat $condidat)
    {
        // Delet all user photos if they exists
        $photos = array('photo','photoID','diplom');
        foreach ($photos as $photo) {
            if(file_exists(public_path('images/'.$condidat->$photo))){
                unlink(public_path('images/'.$condidat->$photo));
            }
        }

        $condidat->delete();

        return redirect('/condidats')->with('message','Deleted succss !');
    }
}
