<?php

namespace App\Http\Controllers\Index;


use App\Models\Page;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Indexcontroller extends Controller
{



    public function __construct()
    {
        // $this->middleware('guest:web');
    }


    public function index(){

   /*      User::create([
            'username' => 'Name34ujkkk',
            'name' => 'Name34',
            'email' => 'mustafa1390@gmail.com',
            'password' => Hash::make('123456') ,
        ]); */

        return view('index.home.index');
    }


    public function panel(){
        return view('user.panel.index');
    }

    public function page($title  ){
        $mypage=Page::where('title' , $title)->first();

        return view('index.page.mypage' , compact(['mypage']));
    }



}
