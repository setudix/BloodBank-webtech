<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showContactForm($id)
    {
        $user = User::findOrFail($id);
        $email = $user->email;
        return view('contact', compact('user','email'));
    }

}