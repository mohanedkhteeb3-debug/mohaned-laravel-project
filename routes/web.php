<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskcontroller;
use App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view(view:'welcome');
});

Route::get('/about', function (){
    $name = 'Badran';

    $departments = [
    '01'=> 'Tichnical',
    '2'=> 'Financial',
    '3'=> 'Sales',
    ];

return view('about', [
    'name' => $name,
    'departments' => $departments
]);});

Route::post('/about', function() {
    $name = $_POST['name'];
    $departments = [
    '01'=> 'Tichnical',
    '2'=> 'Financial',
    '3'=> 'Sales',
    ];
    return view('about' ,compact('name'));
});

Route :: get ('tasks' , [taskcontroller::class, 'index'] );

Route::post('create' , [taskcontroller::class ,'create']);

Route::post('delete/{id}' , [taskcontroller::class,'destroy']);

Route::post('/edit/{id}', [taskcontroller::class,'edit']);

Route::post('update', [taskcontroller::class,'update']);

Route::get('app', function(){
  return view('layouts.app');
});

Route::get('users', [usercontroller::class, 'index']);
Route::post('users/create', [usercontroller::class, 'create']);
Route::post('users/delete/{id}', [usercontroller::class, 'destroy']);
Route::post('users/edit/{id}', [usercontroller::class, 'edit']);
Route::post('users/update', [usercontroller::class, 'update']);
