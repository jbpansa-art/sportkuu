<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah sudah login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Ambil user yang sedang login
        $user = User::find(Auth::id());

        // Kalau bukan admin
        if (!$user || $user->role !== 'admin') {
            abort(403, 'Akses hanya untuk admin.');
        }

        return $next($request);
    }
}