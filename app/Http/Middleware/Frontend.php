<?php

namespace App\Http\Middleware;

use App\Helpers\AppHelper;
use Closure;

class Frontend
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
        $fronten_enabled = AppHelper::isFrontendEnabled();
        if (!$fronten_enabled){
            return redirect('login');
        }
        return $next($request);
    }
}
