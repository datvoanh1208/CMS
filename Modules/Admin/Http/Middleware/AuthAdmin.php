<?php
/**
 * Created by PhpStorm.
 * User: pss
 * Date: 02/03/2018
 * Time: 16:40
 */

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard()->guest()) {
            return redirect('/login');
        }
        return $next($request);
    }
}