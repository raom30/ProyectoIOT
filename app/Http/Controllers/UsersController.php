<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Role;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::with('roles')->get();
        
        $roles = Role::all();
        
       // Log::debug($user[0]->rol->name);

        return view('config/users',['users' => $user,'roles' => $roles]);
    }
    
    public function updateRol(Request $request) {
        Log::debug($request->input('rol'));
        
        Log::debug(Auth::id());
        
        $user = User::where('id',$request->input('uid'))->first();
        
        Log::debug($user);
        
        $user->roles()->updateExistingPivot($request->input('rol'), ['role_id' => $request->input('rol')]);
        
        //User::updateExistingPivot($callback);
        
        return redirect('configuracionUsuarios');
    }
}
