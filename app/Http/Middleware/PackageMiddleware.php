<?php

namespace App\Http\Middleware;

use App\Models\Subscriber;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use App\Models\User;

class PackageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = Auth::user();

        $subscribedUsers = User::whereHas('subscribers', function ($query) {
            $query->where('paid', '=', 1)->where('expires_at', '>', now());
        })->get();

        if ($subscribedUsers->contains($user)) {
            $subscriptionType = Subscriber::where('user_id', $user->id)->first();
            $package = $subscriptionType->package;
            $request->attributes->add(['package' => $package]);
            return $next($request);
        }

        return redirect()->route('packages');
    }
}
