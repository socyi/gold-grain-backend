<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        $icomingFields = $request->validate([
            'name' => ['required', 'min:1', 'max:10', Rule::unique('users','name')],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => ['required', 'min:1', 'max:10']

        ]);
        $icomingFields['password'] = bcrypt($icomingFields['password']);
        $user =User::create($icomingFields);
        return 'logged';
    }


    public function login (Request $request){
        $icomingFields = $request->validate([
            'loginname' => 'required',
            'loginpassword' => 'required'
        ]);

      

        return 'logged in';
    }


 

  
}
