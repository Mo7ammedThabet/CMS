<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $postCount = Post::count();
        $categoryCont = Categorie::count();
        $userCount = User::count();
        return view('auth.dashboard' , compact('postCount','categoryCont','userCount'));
    }
}




