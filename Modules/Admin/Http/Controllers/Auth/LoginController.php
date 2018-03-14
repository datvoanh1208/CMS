<?php

namespace Modules\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin::v1.public.login')->with('status', 'New book was added');
    }

    /**
     * @param LoginAdminRequest $request
     * @return string
     */
    public function login(LoginAdminRequest $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255'
        ]);
        $oAdmin = new Admin();
        $authAdmin = $oAdmin->getAuthention($request->email);
        if (isset($authAdmin)) {
            if (Auth::attempt([Admin::ADMIN__EMAIL => $request->email, Admin::ADMIN_PASSWORD => $request->password])) {
                return 'successfully';
            }
        }
        return 'fail';
    }

    public function logout(){
        auth()->guard()->logout();
        return redirect('/login');
    }
}
