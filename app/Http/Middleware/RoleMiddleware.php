<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // app/Http/Middleware/RoleMiddleware.php
    // public function handle($request, Closure $next, ...$roles)
    // {
    //     if (!auth()->check()) {
    //         return redirect()->route('login');
    //     }

    //     if (!in_array(auth()->user()->role, $roles)) {
    //         abort(403);
    //     }

    //     return $next($request);
    // }


    public function handle(Request $request, Closure $next, ...$roles)
    {
        // =========================
        // BELUM LOGIN
        // =========================
        if (!auth()->check()) {

            // REQUEST DARI API
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Unauthenticated'
                ], 401);
            }

            // REQUEST DARI WEB
            return redirect()->route('login');
        }

        // =========================
        // ROLE TIDAK SESUAI
        // =========================
        if (!in_array(auth()->user()->role, $roles)) {

            // REQUEST DARI API
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Forbidden'
                ], 403);
            }

            // REQUEST DARI WEB
            abort(403, 'Akses ditolak');
        }

        return $next($request);
    }
}
