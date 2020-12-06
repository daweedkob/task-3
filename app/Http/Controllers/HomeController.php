<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() //სხვა და სხვა მეთოდით ვაკეთებ ავტორიზიზირებული მომხ. შემოწმებას
    {
        if (Auth::guard(null)->check()){
            return view('home');
        }
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return view('auth.login')
        ->with('logout',true);
    }

    public function About()
    {
        return view('btu');
    }

    public function getPage($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        return view('btu')
        ->with('user', $user);
    }

    public function LogIn()
    {
        return redirect()->route('btu',['id' => Auth::user()['id']]);
    }
}
