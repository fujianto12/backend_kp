<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;
use Illuminate\Http\Request;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Override method to validate password confirmation with custom error messages.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateConfirmPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ], [
            'password.required' => 'Password wajib diisi.',
            'password.confirmed' => 'Password konfirmasi tidak cocok.',
        ]);
    }
}
