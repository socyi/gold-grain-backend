<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
 
    public function register(Request $request)
{
    $incomingFields = $request->validate([
        'name' => ['required', 'min:1', 'max:10', Rule::unique('users', 'name')],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'min:1', 'max:10']
    ]);

    $incomingFields['password'] = bcrypt($incomingFields['password']);
    $user = User::create($incomingFields);

    // Automatically log in the user after registration
    Auth::login($user);

    return redirect()->intended('/postlist');
}


    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);
    
        if (auth()->attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
            return redirect()->intended('/postlist');
        }
    
        return redirect('/');
    }
    
    public function logout (){
        auth()->logout();
        return redirect('/');
    }

  
}
