<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::group(['middleware'=> ['web', 'auth']], function(){



Route::get('/', function () {
    //return view('welcome'); 
    if(Auth::user()->admin == 0){
		return view('home');
	}
	else
	{
		$users = App\user::all();
		return view('adminhome', $users);
	}
});

 

 });
