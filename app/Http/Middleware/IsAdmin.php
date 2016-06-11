<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = null)
	{
		$user = $request->user();

		if (!Auth::guard($guard)->guest() && $user->isAdmin())
		{
			return $next($request);
		}
		return redirect('/login')->with('pesan', 'Halaman tersebut tidak bisa diakses!, diperlukan hak Administrator.');
	}

}
