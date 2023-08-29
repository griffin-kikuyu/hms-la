<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    //
    public function index()
    {
        // Example: Fetch user data to display on the dashboard
        $user = User::find(auth()->user()->id); // Assuming you have a User model

        return view('dashboard', compact('user')); // Passing data to the view
    }
    public function appointmnt()
    {
        
    }
    public function doctorlist()
    {
        
    }
    public function managedoctors()
    {
        
    }
    public function patientlist()
    {
        
    }
    public function prescriptionlist()
    {
        
    }
}
