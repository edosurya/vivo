<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\User;

class SetLocalization
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) {
            App::setLocale(session()->get('locale'));
        }
        // dd(\Auth::user());

        // if (\Auth::user()->type == User::SUPERADMIN || \Auth::user()->type == User::ADMIN) {
        //     dd(\Auth::user());
        //     return $next($request);
        // }

        return $next($request);
    }
}
