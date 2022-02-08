<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userauthcontroller;
use App\Http\Controllers\admincontroller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::post('home',[Userauthcontroller::class,'checkadmin'])->name('admin');



*/









Route::get('/',[Userauthcontroller::class,'login'])->name('login');
Route::post('home',[Userauthcontroller::class,'checkadmin'])->name('admin');


Route::get('register',[Userauthcontroller::class,'register']);
Route::post('pretest',[Userauthcontroller::class,'adduser'])->name('adduser');
Route::post('score',[Userauthcontroller::class,'sendpretest'])->name('sendpretest');

//ห้ามใส่ {User_name}
Route::get('welcome',[Userauthcontroller::class,'welcome'])->name('welcome');


Route::post('profile',[Userauthcontroller::class,'profile'])->name('profile');
//Route::get('delete/{user_name}',[Userauthcontroller::class,'delete'])->name('delete');

Route::get('userinform',[admincontroller::class,'dataUser'])->name('user');
Route::get('userscore',[admincontroller::class,'scoreuser'])->name('score');

Route::get('forgotpass',[Userauthcontroller::class,'check'])->name('check');
Route::get('forgetpassword',[Userauthcontroller::class,'fg'])->name('fg');
Route::get('reset/{user_name}',[Userauthcontroller::class,'reset'])->name('reset');


Route::get('menuone',function(){
    return view('icon.menuone');
});

Route::get('menutwo',function(){
    return view('icon.menutwo');
});

Route::get('menuthree',function(){
    return view('icon.menuthree');
});

Route::get('menufour',function(){
    return view('icon.menufour');
});

Route::get('menufive',function(){
    return view('icon.menufive');
});

Route::get('menusix',function(){
    return view('icon.menusix');
});



