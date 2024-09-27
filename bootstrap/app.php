<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Laravel\Sanctum\Http\Middleware\CheckAbilities;
use Laravel\Sanctum\Http\Middleware\CheckForAnyAbility;
use App\Http\Middleware\AuthMiddleware; // Import your custom middleware

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register Sanctum ability middleware aliases
        $middleware->alias([
            'abilities' => CheckAbilities::class, // Middleware to check multiple abilities
            'ability' => CheckForAnyAbility::class, // Middleware to check for at least one ability
            'auth.custom' => AuthMiddleware::class, // Register your custom auth middleware
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
