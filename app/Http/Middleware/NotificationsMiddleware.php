<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Notifications\NewOrderNotification;
use Symfony\Component\HttpFoundation\Response;

class NotificationsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            $notifications = $user->notifications->where('notifiable_id', '=', $user->id)
                ->sortByDesc('created_at')
                ->take(5);

            View::share('notifications', $notifications);
        }

        return $next($request);
    }
}
