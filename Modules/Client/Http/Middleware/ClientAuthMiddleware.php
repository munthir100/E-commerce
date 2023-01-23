<?php

namespace Modules\Client\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class ClientAuthMiddleware
{
    use HasRoles;
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->hasRole('client')) {
            return redirect()->route('store.index', ['storeLink' => $request->route('storeLink')]);
        }
        return $next($request);
    }
}

