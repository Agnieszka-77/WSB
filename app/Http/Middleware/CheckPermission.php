<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPermission
{
    public function handle($request, Closure $next, $permission)
    {
        if (!Auth::check() || !Auth::user()->hasPermission($permission)) {// Jeśli użytkownik nie jest zalogowany lub nie ma uprawnienia
            return redirect('home')->with('error', 'Brak dostępu!');
        }

        return $next($request);
    }
}
