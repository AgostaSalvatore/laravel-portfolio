<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return 'Admin name: ' . $user->name;
    }

    public function profile()
    {
        $user = Auth::user();
        return 'Profile password: ' . $user->password;
    }
}
