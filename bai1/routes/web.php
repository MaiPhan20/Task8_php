<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','HomeController@showWelcome');
Route::get('/', function () {
    return view('welcome');
});
Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showDetails');
Route::get('about',function (){
    return 'About Content';
});
Route::get('about/directions',function (){
    return 'Direction go here ';
});
Route::any('submit-form',function (){
    return 'Process Form';
});
Route::get('about/{theSubject}','AboutController@showSubject');

Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject. ' content goes here';
});
Route::get('about/classes/{theSubject}',function ($theSubject){
    return $theSubject. ' content goes here';
});
Route::get('about/classes/{theArt}/{thePrice}',function ($theArt,$thePrice){
    return "The product in $theArt and $thePrice";
});
Route::get('where',function (){
    return Redirect::route('directions');
});
