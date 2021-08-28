<?php

namespace App\Http\Middleware;

use App\Services\Auth\AuthenticatedSessionService;
use Auth;
use Closure;
use Illuminate\Http\Request;

class CheckBanned
{
    private $service;

    public function __construct()
    {
        $this->service = app(AuthenticatedSessionService::class);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $this->service->checkNotBan();

        return $next($request);
    }
}
