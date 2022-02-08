<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\useracc;
use App\Models\pretest;
use App\Models\total;
use Carbon\Carbon;
use App\Models\nopretest;
use App\Models\care;

class Userauthcontroller extends Controller
{
    function login (){
        return view('welcome');
    }

    function checkadmin(Request $request){
        $request->validate([
            'user_name' => 'required',
            'password' => 'required|min:6|max:12'
        ],[
            '*.required' => 'required',
            'password.min' => 'password must take at least 6 character',
            'password.max' => 'password must not greater than 12 character',
            
        ]);
        if($request->user_name != 'Admin'){
            $user = useracc::where('user_name','=',$request->user_name)->first();
            $usernopretest = nopretest::where('user_name','=',$request->user_name)->first();
            if($user){
                if(Hash::check($request->password,$user->password)){
                    $user_name = $request->user_name;
                   
                   return redirect()->route('welcome',compact('user_name'));
                }else{
                    return redirect()->back()->with("password","Wrong password");
                    
                }
            }else if($usernopretest){
                if(Hash::check($request->password,$usernopretest->password)){
                    $user_name = $request->user_name;
                   
                   return redirect()->route('welcome',compact('user_name'));
                }else{
                    return redirect()->back()->with("password","Wrong password");
                    
                }
            }else{
                return redirect()->back()->with("user","Not found User name");
            }
        }else{
            $user = useracc::where('user_name','=',$request->user_name)->first();
            if($user){
                if(Hash::check($request->password,$user->password)){
                   return view('admin.homeadmin');
                }else{
                    return redirect()->back()->with("password","Wrong password");
                    
                }
            }else{
                return redirect()->back()->with("user","Not found User name");
            }
        }

   
      
        
    }

    function register(){
        return view('register');
    }

    function adduser(Request $request){
    
       $request->validate([
            'user_name' => 'required|unique:useraccs|unique:nopretests|max:56',
            "name_user" => 'required|unique:useraccs|unique:nopretests|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/',
            'password' => 'required|min:6|max:12',
            'email' => 'required|unique:useraccs|unique:nopretests|email',
            'birth_date' => 'required',
            'uni' => 'required',
            'year' => 'required|integer',
            'gender' => 'required',
            'stdid' => 'required|integer|unique:useraccs|unique:nopretests',
            'allow' => 'required'
        ],[
            '*.required' => 'required',
            'password.min' => 'password must take at least 6 character',
            'password.max' => 'password must not greater than 12 character',
            '*.unique' => 'Already taken',
            'user_name.max' => 'User name must not greater than 56 character',
            '*.integer' => 'Please enter number',
            'name_user.regex' => 'This is invalid',
            'email.email' => 'This must be email form'


        ]);

    if($request->allow != 'No'){
            $useracc = new useracc;
            $useracc->user_name = $request->user_name;
            $useracc->name_user = $request->name_user;
            $useracc->password = Hash::make($request->password);
            $useracc->email = $request->email;
            $useracc->birth_date = $request->birth_date;
            $useracc->uni = $request->uni;
            $useracc->year = $request->year;
            $useracc->gender = $request->gender;
            $useracc->stdid = $request->stdid;   
            $useracc->save();

            $user_name = $request->user_name;

            return view('pretest',compact('user_name'));
    }else{
        $nopretest = new nopretest;
        $nopretest->user_name = $request->user_name;
        $nopretest->name_user = $request->name_user;
        $nopretest->password = Hash::make($request->password);
        $nopretest->email = $request->email;
        $nopretest->birth_date = $request->birth_date;
        $nopretest->uni = $request->uni;
        $nopretest->year = $request->year;
        $nopretest->gender = $request->gender;
        $nopretest->stdid = $request->stdid;   
        $nopretest->save();

        $user_name = $request->user_name;

        return view('home',compact('user_name'));
    }
   

    }



    function sendpretest(Request $request){
        $user_name = $request->user_name;

        $pretest = new pretest;
        $pretest->user_name = $user_name;
        $total = 0;

        $care = new care;
        $care->user_name = $user_name;
        $total2 = 0;

        for($i=1;$i<=35;$i++){
            if($i<=10){

                if($request->$i != NULL){
                    $score = $request->$i;
                    $total = $total+$score;
                    $pretest->$i = $request->$i;
                }else{
                    $pretest->$i = 0;
                }

            }else{

                if($request->$i != NULL){
                    $score2 = $request->$i;
                    $total2 = $total2+$score2;
                    $care->$i = $request->$i;
                }else{
                    $care->$i = 0;
                }

            }
        }
      
        
        $totalscore = new total;
        $totalscore->total = $total;
        $totalscore->total2 = $total2;
        $totalscore->user_name = $user_name;

        $pretest->save();
        $care->save();
        $totalscore->save();
        
      
       return view('score',compact('total','user_name','total2'));
    }

    function welcome(Request $request){
        $user_name = $request->user_name;
        return view('home',compact('user_name'));
    }

    

    function profile (Request $request){
        $user = useracc::where('user_name','=',$request->user_name)->first();
        if($user){
            $total = total::where('user_name','=',$request->user_name)->first();
            $total2 = total::where('user_name','=',$request->user_name)->first();   
            $user_name = $user->user_name;
            $total = $total->total;
            $total2 = $total2->total2;
            $age = Carbon::parse($user->birth_date)->diff(Carbon::now())->y;
            return view('profile',compact('user_name','user','total','age','total2'));
           
        }else{
            $user = nopretest::where('user_name','=',$request->user_name)->first();
            $user_name = $user->user_name;
            $age = Carbon::parse($user->birth_date)->diff(Carbon::now())->y;
            $total = "didn't do pretest";
            $total2 = "didn't do pretest";
            return view('profile',compact('user_name','user','age','total','total2'));
        }
        
    }
        

 
    
    function fg(){
        return view('forgot');
    }

    function check(Request $request){
        $user = useracc::where('email','=',$request->email)->first();
        $usernopretest = nopretest::where('email','=',$request->email)->first();
        if($user){
            $user_name = $user->user_name;
            return view('resetpassword',compact('user_name'));
        }else if($usernopretest){
            $user_name = $usernopretest->user_name;
            return view('resetpassword',compact('user_name'));
        }
        else{
            return redirect()->back()->with("Nfound","Not found account");
        }
        
    }

    function reset(Request $request , $user_name){
        
    $request->validate([
            'password' => 'required|min:6|max:12',
        ],
        [
            'password.required' => 'required',
            'password.min' => 'password must take at least 6 character',
            'password.max' => 'password must not greater than 12 character',
        ]);
        $user = useracc::where('user_name','=',$request->user_name)->first();
        $usernopretest = nopretest::where('user_name','=',$request->user_name)->first();
        
        if($user){
            $update = useracc::where('user_name','=',$request->user_name)->first()->update([
                'password' => Hash::make($request->password)
            ]);
        }else if($usernopretest){
            $update = nopretest::where('user_name','=',$request->user_name)->first()->update([
                'password' => Hash::make($request->password)
            ]);
        }
        
        return redirect()->back()->with('success',"Password Updated");


        
    }

   

}
