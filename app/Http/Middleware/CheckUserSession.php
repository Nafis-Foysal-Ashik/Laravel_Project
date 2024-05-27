<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user')) {
            if ($request->cookie('user_id')) {
                // Attempt to log the user in using the cookie
                $user = User::find($request->cookie('user_id'));
                if ($user) {
                    Auth::login($user);
                    session(['user' => $user->only(['id', 'fullname', 'email', 'type'])]);
                } else {
                    return redirect('login')->withErrors(['msg' => 'Session expired. Please log in again.']);
                }
            } else {
                return redirect('login')->withErrors(['msg' => 'You must be logged in to access this page.']);
            }
        }

        return $next($request);
    }
}
