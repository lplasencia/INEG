<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $profile = Profile::findOrFail($user->id);
        return view('profile.index',compact('profile'));
    }

    public function update(Request $request,$id)
    {
        $data = request()->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'nullable|numeric|digits:9',
            'file' => 'image|max:3072'
        ],
        [
            'nombre.required' => 'Ingrese nombre',
            'apellido.required' => 'Ingrese apellido',
            'telefono.numeric' => 'Ingrese solo números',
            'telefono.digits' => 'Ingrese solo 9 números',
            'file.image' => 'Tipo de archivo invalido',
            'file.max' => 'Archivo muy pesado'
        ]);

        //Trayendo la url si es que habia antes 
        $profile = Profile::findOrFail($id);
        $url = $profile->foto;

        if(is_null($request->file('file')) == false)
        {
            //Copiando la imagen en la carpeta 
            $imagen = $request->file('file')->store('public/fotos');
            //Cambiando la url para que pueda acceder mediante el acceso directo de storage en public
            $url = Storage::url($imagen);
        }

        $profile = Profile::findOrFail($id);
        $profile->nombre = $request->nombre;
        $profile->apellido = $request->apellido;
        $profile->direccion = $request->direccion;
        $profile->telefono = $request->telefono;
        $profile->foto = $url;
        $profile->save();

        return redirect()->route('home')->with('datos','Perfil Actualizado Correctamente');
    }
}
