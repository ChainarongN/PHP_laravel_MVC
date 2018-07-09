<?php

use App\Post;
use Carbon\Carbon;
use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Main1');
});


    Route::resource('/member', 'MemberController');

    Route::resource('/room', 'RoomController');

//Route:: group(['middlewre'=>'web'],function (){
    Route::resource('/posts', 'PostController');

//    Route ::get('/date',function (){
//      $date = new DateTime('+1 week');
//      echo  $date->format('d-m-Y');
//      echo '<br><br>';
//      echo Carbon::now();
//      echo '<br><br>';
//      echo Carbon::now()->addDay(10)->diffForHumans();
//      echo '<br><br>';
//      echo Carbon::now()->subMonth(5)->diffForHumans();;
//    });
//
//    Route ::get('/getname',function (){
//       $user = User :: find(1);
//       echo $user->name." ".$user->email;
//    });
//});