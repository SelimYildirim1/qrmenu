<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ConfigMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $config=Config::where('id','1')->firstOrFail();
        View::share('config',$config);
        return $next($request);
    }
}
