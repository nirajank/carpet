<?php namespace App\Http\Middleware;

use Closure;

class branchwarehousemiddleware {

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
        if(Hash::check('$request->Branch_Code', Auth::user()->Branch_Code))
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
