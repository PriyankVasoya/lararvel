<?php

namespace App\Http\Middleware;

use Closure;
use Session;

use Illuminate\Http\Request;

class loginmiddl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

       $path = $request->path();

        if(($path == '/') && Session::get('user'))
        {
            // dd('if');
            // echo Session::get('user');
            return redirect('dashboard');
        }
        // elseif(($path != '/') && !Session::get('user')){
        //     return redirect('/');
        // }
        
        return $next($request);
    }
}
