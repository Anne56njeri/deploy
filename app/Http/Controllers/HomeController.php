<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function mail()
{
   $name = 'OneLove';
   Mail::to('mary.jereh@gmail.com')->send(new SendMailable($name));

   return 'Email was sent';
}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$userId = \Auth::id();
      $user = User::find($userId);
    if($user->admin == 1)
    {
        return view('admin');
    }
    return view('home');
}


    }
