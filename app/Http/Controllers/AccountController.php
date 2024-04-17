<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AccountController extends Controller
{
    public function redirect()
    {
        // Your implementation here
    }

    public function register()
    {
        return view('site.register');
    }

    public function store(Request $request)
    {
        // Your implementation here
    }

    public function recover()
    {
        return view('site.recover');
    }

    public function sendRecoverEmail(Request $request)
    {
        // Your implementation here
    }

    public function login()
    {
        return view('site.login');
    }

    public function authenticate(Request $request)
    {
        // Your implementation here
    }

    public function logout()
    {
        // Your implementation here
    }
}