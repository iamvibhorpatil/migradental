<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function patient_detail()
    {
        return view('admin.patient_detail');
    }
    
    public function logout()
    {
        Auth::logout();

        // Redirect the user to a different page after logout
        return redirect('/login');
    }
}
