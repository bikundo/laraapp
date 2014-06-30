<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	Mail::send('emails.welcome', [], function($message)
{
    $message->to('binmonk@gmail.com', 'John Smith')->subject('Welcome or something!');
});
});
