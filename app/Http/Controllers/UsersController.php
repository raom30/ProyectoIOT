<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Role;
use App\Role_User;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::with('roles')->get();
        
        $roles = Role::all();
        
        return view('config/users',['users' => $user,'roles' => $roles]);
    }
    
    public function updateRol(Request $request) {
        Log::debug($request->input('rol'));
        
        Log::debug(Auth::id());
        
        $user = User::where('id',$request->input('uid'))->first();
        
        Log::debug($user);
        
        $role_user = Role_User::where('user_id', $user->id)->first();
        
        Log::debug($role_user);
        
        $role_user->role_id = $request->input('rol');
        $role_user->save();

        
        return redirect('configuracionUsuarios');
    }
}
