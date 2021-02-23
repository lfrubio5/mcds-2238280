<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

Route::get('hello', function () {
    return 'La primera ruta bienvenido';
});

Route::get('allusers', function () {
    $user = App\Models\User::take(10)->get();
    dd($user);// cambiar este por el var_dump
   // return 'La primera ruta bienvenido';
});


Route::get('showuser/{id}', function (Request $request) {
    $id = $request->id;
    $user = App\Models\User::find($id);
    return view('showuser')->with('user', $user);
});

Route::get('userlimit', function () {
    $user = App\Models\User::limit(10)->get();
    $date = date('Y');
    echo Carbon::now(); 
    foreach ($user as $key => $value) {
        
        $yearUser = Carbon::createFromFormat('Y-m-d', $value["birthdate"])->format('Y');
        $month =  Carbon::createFromFormat('Y-m-d', $value["birthdate"])->format('m');
        $day = Carbon::createFromFormat('Y-m-d', $value["birthdate"])->format('d');
        $yearOld = $date -$yearUser; 
        $fechaCreacion = $value["created_at"];

        //echo $date1->locale($boringLanguage)->diffForHumans($date2);
        $fechaCreacion->diffForHumans();
        Carbon::createFromFormat('Y-m-d', $fechaCreacion)->diffForHumans();
     
       $birthDate =  $value["birthdate"];
       $fullName =  $value["fullname"];
       echo "<br>".$fullName."->".$yearOld." Años - Creado-> ";
    }
});


Route::get('challenge', function () {
    //$user = App\Models\User::all()->take(10)->get();
    foreach (App\Models\User::all()->take(10) as $user) {
        $years = Carbon::createFromDate($user->birthdate)->diff()->format('%y years old');
        $since = Carbon::parse($user->created_at);
       // echo $user->fullname. " - ".$years. " - created->".$since->diffForHumans()." <br>"; 
         $results[] = $user->fullname . " - " . $years . " - created " . $since->diffForHumans() . "<br>";
    }
  
    // cambiar este por el var_dump
   // return 'La primera ruta bienvenido';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
