<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\NewsController;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends NewsController
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $password = $request->password;
        $hashedPassword = Hash::make($password);
        $request->validate([
            'name' => ['required', 'string', 'max:55'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:55', 'unique:'.User::class],
            'password' => ['required', 'confirmed',  Rules\Password::defaults(), 'max:55'],
        ]);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
        ]);


        event(new Registered($user));

        if (Auth::check()) {
            return redirect(RouteServiceProvider::HOME);
        } else {
            // Foydalanuvchi ro'yxatdan o'tmagan bo'lsa, uni login sahifasiga yo'naltiramiz
            return redirect()->route('login');
        }
    }
}
