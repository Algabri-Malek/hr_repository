<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class dashbord2Controller extends Controller
{
    //
    public function index(){
        $catCount=User::get()->count();


        return view('admin.dashboard2')->with('catCount',$catCount);        
    }
}
