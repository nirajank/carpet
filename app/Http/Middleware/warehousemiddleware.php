<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use Hash;
class warehousemiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::user()){
        if(Hash::check('nirajan', Auth::user()->password))
        {
         return $next($request);
        }
        else
        {
                return view('guest');

        }
    }else
    { 
    	return redirect('auth/login');
     }

}
}
