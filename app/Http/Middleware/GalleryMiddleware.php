<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class GalleryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $gallery = Gallery::where('status','1')->get();
        View::share('gallery', $gallery);
        return $next($request);
    }
}
