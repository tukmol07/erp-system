<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard with Role-based Rendering
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});



require __DIR__ . '/auth.php';

// Role-based Middleware Handling
Route::middleware(['auth', 'role.hr'])->group(function () {
    Route::get('/hr', function () {
        return view('hr.dashboard');
    });
});

Route::middleware(['auth', 'role.Production'])->group(function () {
    Route::get('/production', function () {
        return view('production.dashboard');
    });
});

Route::middleware(['auth', 'role.Planning'])->group(function () {
    Route::get('/planning', function () {
        return view('planning.dashboard');
    });
});

Route::middleware(['auth', 'role.Inventory'])->group(function () {
    Route::get('/inventory', function () {
        return view('inventory.dashboard');
    });
});

Route::middleware(['auth', 'role.Reporting'])->group(function () {
    Route::get('/reporting', function () {
        return view('reporting.dashboard');
    });
});

Route::middleware(['auth', 'role.CRM'])->group(function () {
    Route::get('/crm', function () {
        return view('crm.dashboard');
    });
});

Route::middleware(['auth', 'role.Sales'])->group(function () {
    Route::get('/sales', function () {
        return view('sales.dashboard');
    });
});

Route::middleware(['auth', 'role.Marketing'])->group(function () {
    Route::get('/marketing', function () {
        return view('marketing.dashboard');
    });
});

Route::middleware(['auth', 'role.Finance'])->group(function () {
    Route::get('/finance', function () {
        return view('finance.dashboard');
    });
});
Route::middleware(['auth', 'role.User'])->group(function () {
    Route::get('/user', function () {
        return view('user.dashboard');
    });
});
