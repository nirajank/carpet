<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class MainMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{  
		$password="nirajan";
		$email="nirajankay@gmail.com";
		if (Auth::attempt(['email' => $email, 'password' => $password])) {
			return $next($request);

}
else
            return redirect('auth/login');
		
	}

}
