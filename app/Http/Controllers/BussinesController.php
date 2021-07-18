<?php

namespace App\Http\Controllers;

use App\Models\Bussines;
use Illuminate\Http\Request;

class BussinesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
//        $validatedData = $request->validate([
//            'nombre' => ['required'],
//            'tipo' => ['required'],
//            'contacto' => ['required'],
//            'imageprofile' => ['required', 'image'],
//        ]);

        $imageName = time() . '.' . $request->imageprofile->extension();
        $request->imageprofile->move(public_path('images'), $imageName);
        Bussines::create([
            'nombre' => $request->name,
            'tipo' => $request->type,
            'contacto' => $request->contact,
            'imagen' => '/images/' . $imageName,
        ]);

        return redirect()->route('welcome');
    }
}
