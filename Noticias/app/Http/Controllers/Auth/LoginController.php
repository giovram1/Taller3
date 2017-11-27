<?php

namespace App\Http\Controllers\Auth;

use Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{
   public function login()
   {
    $datosUsuario = $this->validate(request(),[

        'email' => 'email|required|string',
        'password' => 'required|string'

    ]);

    

    if (Auth::attempt($datosUsuario)) {
       return 'secisión iniciada';
    }
    return back()
    ->withErrors(['email' => 'datos erroneos'])
    ->withInput(request(['email']));
   }
}
