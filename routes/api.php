<?php

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Why are we here? We are using "api.php" because there is CSRF protection in "web.php" as its expected to be accessed using browser. But, since we are using an API we won't need it.



// Create an event
/*
    Related Resources:
    https://laravel.com/docs/9.x/requests#interacting-with-the-request
    https://laravel.com/docs/9.x/eloquent#inserting-and-updating-models
*/

// in routes/api.php the route is prefixed with "/api"
// for example the route below can be accessed via /api/events/create
Route::post("events/create", function (Request $request) {

    /*
        Got an error? The GET method is not supported?
        You cannot access POST routes directly from the browser, because the browser will send a GET request by default. You must access it using an HTML form of using tools like Postman.
        Learn more: https://www.w3schools.com/tags/ref_httpmethods.asp
    */


    // Simple validation, not required but prefered. Validation is very important for production projects
    /*
        Related Resources:
        https://laravel.com/docs/9.x/validation#quick-writing-the-validation-logic
        https://laravel.com/docs/9.x/validation#available-validation-rules
    */
    // Creating a validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'category' => 'required|max:255|alpha_num',
            'datetime' => 'required|date',
            'description' => 'max:255',
            'user_id' => 'integer' // User id should not be provided by user, it should be provided by the backend, but since we are not using authentication, we will use this.
        ]);

        // If validation fails, return an error message
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        $validated = $validator->validated();

        // Creating the event using "create" method from the "Event" class which is inherited from "Model" class
        $event = Event::create([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'datetime' => $validated['datetime'],
            'description' => $validated['description'] ?? null,
            'user_id' => $validated['user_id'] ?? null,
            // No need to include "status" as it will default to "pending"
        ]);

        // Returning the created event to the user
        return Event::find($event->id); // changed this to find the event by id instead of returning the $event object as the $event object does not reflect the data from the database
    });
