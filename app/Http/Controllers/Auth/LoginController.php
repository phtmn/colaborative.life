<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Alert;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/painel-investidor/perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
    public function authenticated(Request $request, $user)
    {
        if (!$user->verified) {
            auth()->logout();
            //You need to confirm your account. We have sent you an activation code, please check your email.
            Alert::warning( 'Precisamos da confirmação de conta em seu E-mail.','Verifique seu e-mail')->persistent('Ok');
            return back();
        }
        return redirect()->intended($this->redirectPath());
    }
}
