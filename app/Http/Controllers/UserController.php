<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function login(Request $request){
        $user = User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password, $user->password)) {
            return "Email OR Password Does Not Match!";
        }

        else{
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
