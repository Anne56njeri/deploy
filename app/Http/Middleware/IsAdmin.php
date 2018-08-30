<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     // this checks if a user is admin
    public function handle($request, Closure $next)
    {

      if(auth()->user()->isAdmin()) {
      return $next($request);
  }// if not admin it redirects you to the home page
        return redirect('home');
    }
}
