<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class DropboxAuth
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user')) {
            return Socialite::driver('dropbox')
                ->scopes(['account_info.read', 'files.metadata.write'])
                ->redirect();
        }
        return $next($request);
    }
}
