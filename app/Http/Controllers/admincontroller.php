<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\useracc;
use App\Models\pretest;
use App\Models\total;
use App\Models\nopretest;
use App\Models\care;

class admincontroller extends Controller
{
    function dataUser(){
        $user_name = useracc::all();
        $total = total::all();

        $nopretest = nopretest::all();
        return view('admin.dataUser',compact('user_name','total','nopretest'));
    }

    function scoreuser(){
        $user_name = useracc::all();
        $pretest = pretest::all();
        $care = care::all();
       
        return view('admin.scoreuser',compact('user_name','pretest','care',));
    }

    
        
 }

          


