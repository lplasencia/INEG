<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;

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
            'telefono' => 'nullable|numeric|digits:9'
        ],
        [
            'nombre.required' => 'Ingrese nombre',
            'apellido.required' => 'Ingrese apellido',
            'telefono.numeric' => 'Ingrese solo números',
            'telefono.digits' => 'Ingrese solo 9 números'
        ]);

        $profile = Profile::findOrFail($id);
        $profile->nombre = $request->nombre;
        $profile->apellido = $request->apellido;
        $profile->direccion = $request->direccion;
        $profile->telefono = $request->telefono;
        $profile->save();

        return redirect()->route('home')->with('datos','Perfil Actualizado Correctamente');
    }
}
