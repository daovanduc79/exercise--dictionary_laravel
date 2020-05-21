<?php

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
Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary', function (Request $request) {
    $arr1 = ['teacher', 'student', 'doctor', 'actor', 'singer'];
    $arr2 = ['giáo viên', 'học sinh', 'bác sĩ', 'diễn viên', 'ca sĩ'];
    foreach ($arr1 as $key => $value) {
        if ($request['english'] === $value) {

            $request['vietnam'] = $arr2[$key];
            break;
        } else {
            $request['vietnam'] = ':)))';
        }
    }

    return view('result');
});
