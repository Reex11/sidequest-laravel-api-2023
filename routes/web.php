<?php

use App\Models\Event;
use App\Models\User;
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


// Login

// Register

// List Events
Route::get("events", function () {
    return Event::where('status','approved')->get();
});

// Show Event
Route::get("events/{id}", function ($id) {
    return Event::findOrFail($id);
});

// List Events from a category
/*
    Related Resources:
    https://laravel.com/docs/9.x/routing#route-parameters
    https://laravel.com/docs/9.x/collections#method-where
*/
Route::get("category/{category}", function ($category) {
    // A query to select events where category == $category
    return Event::where("category",$category)->get();
});


// List users
Route::get("users", function () {
    return User::all();
});

// Show User
Route::get("users/{id}", function ($id) {
    return User::findOrFail($id);
});

// Create Event

// Approve Event

// Decline Event


