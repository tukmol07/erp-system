<?php

namespace App\Http;

use App\Http\Middleware\RoleHR;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\RoleCRM;
use App\Http\Middleware\RoleUser;
use App\Http\Middleware\RoleSales;
use App\Http\Middleware\RoleFinance;
use App\Http\Middleware\RolePlanning;
use App\Http\Middleware\RoleInventory;
use App\Http\Middleware\RoleMarketing;
use App\Http\Middleware\RoleReporting;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\RoleProduction;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Http\Middleware\SetCacheHeaders;
use Illuminate\Session\Middleware\StartSession;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Cookie\Middleware\EncryptCookies;

// Custom middleware
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

class Kernel extends HttpKernel
{
    protected $middleware = [
        TrustProxies::class,
        HandleCors::class,
        ValidatePostSize::class,
        TrimStrings::class,
        ConvertEmptyStringsToNull::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
        ],

        'api' => [
            EnsureFrontendRequestsAreStateful::class,
            ThrottleRequests::class . ':api',
            SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'auth' => MiddlewareAuthenticate::class,
        'auth.basic' => AuthenticateWithBasicAuth::class,
        'cache.headers' => SetCacheHeaders::class,
        'can' => Authorize::class,
        'guest' => RedirectIfAuthenticated::class,
        'password.confirm' => RequirePassword::class,
        'signed' => ValidateSignature::class,
        'throttle' => ThrottleRequests::class,
        'verified' => EnsureEmailIsVerified::class,

        // Custom roles
        'role.hr' => RoleHR::class,
        'role.production' => RoleProduction::class,
        'role.planning' => RolePlanning::class,
        'role.inventory' => RoleInventory::class,
        'role.reporting' => RoleReporting::class,
        'role.crm' => RoleCRM::class,
        'role.sales' => RoleSales::class,
        'role.marketing' => RoleMarketing::class,
        'role.finance' => RoleFinance::class,
        'role.user' => RoleUser::class,
        'admin' => AdminMiddleware::class,  // Add this line



        // Admin middleware
        'is_admin' => IsAdmin::class,
        'role' => RoleMiddleware::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('notify:contract-expiry')->daily();
        $schedule->command('contracts:check-expiry')->daily();
        $schedule->command('notify:payroll-reminder')
            ->monthlyOn(25, '08:00'); // Run on the 25th at 8 AM

    }

    protected $commands = [
        \App\Console\Commands\CheckContractExpiry::class,
    ];
}
