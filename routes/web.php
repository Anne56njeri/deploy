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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('stage','StageController');

Route::get('/stagetwo',function(){
  $proposalform=DB::table('proposalforms')->where('Status','StageTwo')->get();
  return view('stagetwo')->withproposalform($proposalform);
});


Route::get('/draft',function(){
  $proposalform=DB::table('proposalforms')->where('Status','Draft')->get();
  return view('draft')->withproposalform($proposalform);
});
Route::get('/stage',function(){
  $proposalform=DB::table('proposalforms')->where('Status','Submit')->get();
  return view('stage')->withproposalform($proposalform);
});
Route::get('/stageone',function(){
  $proposalform=DB::table('proposalforms')->where('Status','StageOne')->get();
  return view('one')->withproposalform($proposalform);
});
Route::get('/all',function(){
  $proposalform=DB::table('proposalforms')->where('Status','Accepted')->get();
  return view('all')->withproposalform($proposalform);
});

Route::resource('proposal','ProposalformController');
Auth::routes();
Route::get('admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
// route for activating the user
Route::get('/verify-user/5454', 'Auth\RegisterController@activateUser')->name('activate.user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
