<?php

namespace Modules\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Admin;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\LoginAdminRequest;

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
    protected $redirectTo = 'admin/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin_guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin::v1.public.login');
    }

    /**
     * @param LoginAdminRequest $request
     * @return string
     */
    public function login(LoginAdminRequest $request)
    {
        $field = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $request->merge([$field => $request->input('login')]);
        if (Auth::guard('admin')->attempt([$field => $request->input('login') , 'password' => $request->input('password')],$request->has('remember')))
        {
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login')->withErrors([
            'error' => 'These credentials do not match our records.',
        ]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
