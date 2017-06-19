<?php

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
use EloquentORM\User;
use Faker\Factory as Faker;

Route::get('/create', function () {
    
    $faker = Faker::create();    
    $user = User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('jlva'),
            'gender' => $faker->randomElement(['f', 'm']),
            'biography' => $faker->text(255)
            
    ]);
    return $user;
});

Route::get('read/{id}', function($id) {
    
    $user = User::find($id);
    
    return $user;
});
Route::get('/update/{id}', function ($id) {
    $faker = Faker::create();
    $user = User::find($id);
    
    $user->gender = $faker->randomElement(['m','f']);
    $user->biography = $faker->text(255);
    
    $user->save();
    
    return $user;
});

Route::get('/delete/{id}', function($id) {
    
    $user = User::find($id);
    
    $user->delete();
    
    return "Usuario Eliminado";
});
