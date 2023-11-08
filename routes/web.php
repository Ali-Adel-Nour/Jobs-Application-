<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route for displaying all listings
Route::get('/', function () {
    $listings = Listing::all();
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => $listings
    ]);
});

// Route for displaying a specific listing by ID
Route::get('/listings/{id}', function ($id) {
    $listing = Listing::find($id);
    return view('listing', [
        'listing' => $listing
    ]);
});
