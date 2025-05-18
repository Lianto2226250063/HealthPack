<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CanRegister
{
    public function handle(Request $request, Closure $next): Response
    {
        // Misal field role di database menyimpan 'admin' untuk admin
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}