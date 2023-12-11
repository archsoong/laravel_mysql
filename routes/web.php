<?php

use App\Models\Film; // 使用 ORM

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/payment', function (Request $request) {
    $id = $request->id;
    $result = DB::SELECT(DB::RAW("SELECT * FROM PAYMENT WHERE CUSTOMER_ID = $id"));
    //return $result;
    return view('payment',compact("result"));
});

Route::get('/film', function (Request $request) {
    
    $result = Film::WHERE('film_id',$request->id)->get();
    //return $result;
    return view('film',compact("result"));
});