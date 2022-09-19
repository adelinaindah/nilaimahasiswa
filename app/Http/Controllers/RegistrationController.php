<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(RegistrationRequest $request)
    {
        User::create($request->all());

        return redirect('/')->with('success', 'Thank you, you are now registered');
    }
}
