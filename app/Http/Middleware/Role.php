<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role  The role to check against
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Memastikan user sudah terautentikasi sebelum memeriksa rolenya
        if (!Auth::check()) {
            return redirect(route('login'));
        }

        // Memeriksa apakah user memiliki role yang sesuai
        if (Auth::user()->role === $role) {
            return $next($request);
        }

        // Opsi: Anda bisa mengarahkan ke halaman 'tidak memiliki akses' atau halaman lain
        // return redirect(route('unauthorized')); // Misalnya, Anda memiliki rute 'unauthorized'

        // Atau, kembalikan ke halaman login dengan pesan error
        return redirect(route('login'))->with('error', 'Anda tidak memiliki akses untuk halaman ini.');
    }
}

