<?php

namespace Barryvdh\DomPDF;

use Closure;

class PDFfile
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
        dd('loco');

        return $next($request);
    }
}
