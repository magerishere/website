<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\Category;
use App\Models\Role;
use App\Models\Comment;

class AdminIndex extends Controller
{
    //
    public function index(){
        if(isset($_GET['paginate'])){
            $paginate = $_GET['paginate'];
        }else{
            $paginate = 5;
        }
        // $posts = Post::paginate($paginate);
        $posts = Post::orderByDesc('id')->paginate($paginate);
        $totalPosts = DB::table('posts')->count();
        $users = User::all();
        $index = true;
        $categories = Category::all();
        $roles = Role::pluck('name','id')->all();
        $comments = Comment::all();
        $totalUsers = DB::table('users')->count();





   
        return view('layout.index',compact('posts','totalPosts','users','index','categories','roles','comments','totalUsers'));
    }

    public function session(Request $request){    
            //
            // $user = Auth::user();
            // $request->session()->put('name',$user->name);
            // $value = $request->session()->all();
            Cookie::queue('test', 'salam', 1);
            return view('admin.shower');
    }
}
