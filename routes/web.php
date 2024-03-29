<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
//1
Route::get('my-name', function () {
    return 'Моё имя';
    //return $_GET['FIO'];
});
//2
Route::get('my-friend', function () {
    return 'Имя друга';
    //return $_GET['FIO-friend'];
});
//3
Route::get('get-friend/{name}', function ($name) {
    return $name;
});
//4
Route::get('my-city/{city}', function ($city) {
    return $city;
})->where(['city'=>'[A-Za-z]+']);
//5
Route::get('level/{lvl}', function ($lvl) {
    if($lvl>0&&$lvl<25)
    return 'новичок';
    elseif($lvl>26&&$lvl<51)
        return 'специалист';
    elseif($lvl>=51&&$lvl<76)
        return 'босс';
    elseif($lvl>=76&&$lvl<99)
        return 'старик';
    elseif($lvl>=99)
        return 'король';
});
Route::get('working/{name}/{date}', function ($name,$date) {
    return 'Проект '.$name.' будет исполнен '.$date;
});
//7
Route::get('power', function () {
    return route('power');
})->name('power');
//8
Route::prefix('admin')->group(function (){
    Route::get('login', function (){
        return route('login');
    })->name('login');
    Route::get('logout', function (){
        return route('logout');
    })->name('logout');
    Route::get('info', function (){
        return route('info');
    })->name('info');
    Route::get('color', function (){
        return route('color');
    })->name('color');
});
//9
Route::prefix('admin')->group(function (){
    Route::redirect('web', 'color',301);
});
//10
Route::get('color/{hex}',function ($hex){
    return ($hex);
})->where(['hex'=>'[0-9A-F]{6}']);
Route::get('test', [MainController::class,'test']);




Route::get('/blade', function () {
    return view('second', ['name' => 'Test']);
});
Route::get('/news', function () {
    return view('new', ['name' => 'Test']);
});
Route::get('/123', function () {
    return view('reg', ['name' => 'Test']);
});
Route::get('/cabinet', function () {
    return view('cab');
})->name('cabinet');
Route::get('/32', function () {
    return view('reg1', ['name' => 'Test']);
});
Route::get('logined', function (){
    return "aaaa";
})->name('welcome');

Route::get('/reg1',[\App\Http\Controllers\UserController::class,'login'])->name('login');
Route::Post('/reg1',[\App\Http\Controllers\UserController::class,'loginPost']);

Route::get('/reg',[\App\Http\Controllers\UserController::class,'register'])->name('register');
Route::Post('/reg',[\App\Http\Controllers\UserController::class,'registerPost']);

Route::get('/users', function (){
    return view('users');
})->name('users');
