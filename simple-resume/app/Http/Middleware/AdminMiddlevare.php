<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Controller;
use App\Services\AdminAuthManagerInterface;
use Closure;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function __construct(private readonly AdminAuthManagerInterface $authManager)
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$this->authManager->isAdmin())
        {
            return redirect()->route('main');
        }
        return $next($request);
    }
}
