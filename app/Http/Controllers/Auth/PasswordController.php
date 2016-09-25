<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    
    use ResetsPasswords;

    public function __construct()
    {
        $this->redirectTo = route('backend.dashboard');
        $this->middleware('guest');
    }

    protected function resetPassword($user, $password)
    {
        $user->password = $password;

        $user->save();

        auth()->login($user);
    }
}
