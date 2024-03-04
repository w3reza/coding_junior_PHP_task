<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('backend.pages.dashboard.welcome', compact('user'));
    }

    public function UserList()
    {
        $users = User::get();
        return view('backend.pages.account.user_list', compact('users'));
    }

    public function test()
    {
        return view('backend.pages.account.user_list');
    }
}
