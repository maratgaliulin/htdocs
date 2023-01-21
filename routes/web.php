<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
Common resource routes:
index - Show all listings
show - Show a single listing
create - Show form to create new listing
store - Store new listing
edit - Show form to edit listing
update - Update listing
destroy - Delete listing
*/

// All listings:

Route::get('/', [ListingController::class, 'index']);

// Show Create form

Route::get('/listings/create', [ListingController::class, 'create'])->name('create_listing')->middleware('auth');

// Store listing data

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


// Manage Listings:

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');


// Single listing:

Route::get('/listing/{listing}', [ListingController::class, 'show']);


// Show register create form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User

Route::post('/users', [UserController::class, 'store']);


// Log user out:

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Show login form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


// Log in user:

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

