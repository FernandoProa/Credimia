<?php

namespace App\Http\Controllers;

use App\Models\Bussines;
use App\Models\Categories;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BussinesController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('nombre')->get();
        return view('welcome',compact('categories'));
    }

    public function store(Request $request)
    {
//        $validatedData = $request->validate([
//            'nombre' => ['required'],
//            'tipo' => ['required'],
//            'contacto' => ['required'],
//            'imageprofile' => ['required', 'image'],
//        ]);
        if($request->imageprofile){
            $imageName = time() . '.' . $request->imageprofile->extension();
            $request->imageprofile->move(public_path('images'), $imageName);
            $name = '/images/' . $imageName;
        } else {
            $name = '/material/img/visionar.png';
        }


        Bussines::create([
            'nombre' => $request->name,
            'category_id' => $request->type,
            'contacto' => $request->contact,
            'imagen' => $name,
        ]);
        Alert::success('Registro correcto', 'Registrado');
        return redirect()->route('welcome');
    }
}
