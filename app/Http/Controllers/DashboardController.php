<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        switch ($user->role) {
            case 'HR':
                return redirect('/hr');
            case 'Production':
                return redirect('/production');
            case 'Planning':
                return redirect('/planning');
            case 'Inventory':
                return redirect('/inventory');
            case 'Reporting':
                return redirect('/reporting');
            case 'CRM':
                return redirect('/crm');
            case 'Sales':
                return redirect('/sales');
            case 'Marketing':
                return redirect('/marketing');
            case 'Finance':
                return redirect('/finance');
            case 'User':
                return redirect('/user');
            default:
                return redirect('/login');
        }
    }
}
