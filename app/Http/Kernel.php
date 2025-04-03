<?php

namespace App\Http;

use App\Http\Middleware\RoleHR;
use App\Http\Middleware\RoleCRM;
use App\Http\Middleware\RoleUser;
use App\Http\Middleware\RoleSales;
use App\Http\Middleware\TrimString;
use App\Http\Middleware\RoleFinance;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RolePlanning;
use App\Http\Middleware\RoleInventory;
use App\Http\Middleware\RoleMarketing;
use App\Http\Middleware\RoleReporting;
use App\Http\Middleware\EncryptCookies;
use App\Http\Middleware\RoleProduction;
use Illuminate\Http\Middleware\HandleCors;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Http\Middleware\ValidatePostSize;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Foundation\Http\Middleware\TrimStrings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Auth\Middleware\Authenticate as MiddlewareAuthenticate;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     */
    protected $middleware = [
        \Illuminate\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            \Illuminate\Routing\Middleware\ThrottleRequests::class . ':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     */
    protected $routeMiddleware = [
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
    ];
}
