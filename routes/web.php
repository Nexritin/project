<?php

use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\Route;

/* Default Router
Route::get('/', function () {
    return view('welcome');
});
*/

/* Teknik Routing 1
Route::view('/', 'home');
*/

// Teknik Routing ke 2
Route::get(uri: '/', action: fn () => view(view: 'home'));

Route::get(uri: '/about', action: fn () => view(view: 'about'));

Route::get(uri: '/contact', action: fn () => view(view: 'contact'));

Route::get(uri: '/gallery', action: fn () => view(view: 'gallery'));


// kita bisa juga return tanpa view
Route::get(uri: 'users', action: function () {

    $users = [
        ['id' => 1, 'nama' => 'Jhon Doe', 'email' => 'jhondoe@gmail.com'],
        ['id' => 2, 'nama' => 'Jhone Lenon', 'email' => 'jhonlenon@gmail.com'],
    ];

    // return $users;  Ketika halaman users diakses dibrowser akan menampilkan data JSON array

    // kita juga bisa melakukan looping data pada Route
    return view(view: 'users.index', data: compact(var_name: 'users'));
});
