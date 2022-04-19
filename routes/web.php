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
