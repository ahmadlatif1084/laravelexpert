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
//ServiceContainer


Route::get('/', function (){
   return FB::getSecretKey();
})->middleware(\App\Http\Middleware\CheckAge::class);
Route::get('/roleuser','RoleUserController@index');
Route::middleware(['auth'])->group(function () {
  //  Route::get('/', 'HomeController@index')->name('home');
    Route::resource('patient', 'PatientController');
    Route::resource('appointment', 'AppointmentController');
    Route::get('/setting', 'HomeController@setting')->name('setting');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::match(['put', 'patch'], '/setting/update/{id}','HomeController@update');
});
Auth::routes();



//Many to Many Relations

Route::get('/manytomanyrelation',function (){
   //Role 1 has multiple users
//    $users=\App\Role::find(1)->users;
//    dd($users->toArray());

    //User 1 has multiple rows
    $role=\App\User::find(1)->roles;
    dd($role->toArray());
//    foreach ($role as $roles){
//        echo $roles->pivot->id . "<br>";
//    }
//    dd();
});

Route::get('/login/facebook','Auth\LoginController@redirectToFacebook');
Route::get('/login/facebook/callback','Auth\LoginController@handleFacebookCallBack');

Route::get('/login/github','Auth\LoginController@redirectToGitHub');
Route::get('/login/github/callback','Auth\LoginController@handleGitHubCallBack');

