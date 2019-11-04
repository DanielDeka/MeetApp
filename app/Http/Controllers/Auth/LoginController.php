<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function redirectTo(){
        // User role
        $role = Auth::user()->role; 
            
        // Check user role
        switch ($role) {
            case 'admin':
                return '/admin';
            break;
            case 'mitra':
                return '/mitra';
            break;
            case 'pengguna':
                return '/pengguna';
            break; 
            default:
                return '/login'; 
            break;
        }
    }

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
