<?php

namespace Farmacia\Http\Controllers;

use Farmacia\Usuarios;
use Freshwork\ChileanBundle\Rut;

class RegistrarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('Registro.create');
    }

    public function store()
    {
        $rut = $_POST['rut'];
        if (Rut::parse($rut)->quiet()->validate()) {
            $this->validate(request(), [
                'name' => 'required|string|max:255',
                'rut' => 'required|string|max:11:unique',
                'password' => 'required|string|min:6|confirmed',
                'tipodeperfil' => 'required'
            ]);
            if ($_POST['habilitado'] === "0") {
                $habilitado = 0;
            } else {
                $habilitado = 1;
            }
            $user = Usuarios::create([
                'rut' => request('rut'),
                'nombre' => request('name'),
                'password' => request('password'),
                'estado' => $habilitado,
                'tipoperfil' => $_POST['tipodeperfil']
            ]);
            auth()->login($user);
            return redirect()->home();
        } else {
            return back()->withErrors(['rut' => 'El rut ingresado es inválido'])->withInput();
        }
    }
}
