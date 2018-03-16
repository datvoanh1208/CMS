<?php

namespace Modules\Admin\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = 'admin/dashboard';

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    use ResetsPasswords;

    /**
     * @param Request $request
     * @param null $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showResetPasswordForm(Request $request, $token = null)
    {
        return view('admin::v1.public.reset-password')->with( ['token' => $token, 'email' => $request->input('email')]);
    }

    /**
     * @return mixed
     */
    public function broker()
    {
        return Password::broker('admin');
    }

    /**
     * @return mixed
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
