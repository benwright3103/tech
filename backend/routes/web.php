<?php

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

	$jobs = DB::table('job_cards')->get();

    return view('index', compact('jobs'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/job', function () {
    return view('fullJobPost');
});

Route::get('/postjob', function () {
    return view('postForm');
});
