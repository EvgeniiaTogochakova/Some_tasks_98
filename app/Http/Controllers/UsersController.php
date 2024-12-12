<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index(){
        // Gate::authorize('view-users');c:\files-share\screenshotsc:\files-share\screenshots
        // return User::all();                     //это было для гейта

        Gate::authorize('view-any', User::class);
        return User::all();                        //это для политики
            
    }

    public function show(User $user){
        Gate::authorize('view', $user);
        return $user;                              //и это для политики тоже
        // return $user->isAdmin();
    }

    
}
