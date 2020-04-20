<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials, true)){
            session(['user'=>'javlon']);
            return response()->json([
                'result'=>'success',
                'user'=>Auth::user(),
                'session'=>session('user')
            ]);
        }
        return response()->json([
            'result'=>'error',
            'message'=>'login failed'
        ]);
    }
}
