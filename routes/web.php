<?php

use App\Events\StartStreaming;
use App\Http\Controllers\Project\ProjectController;
use App\Jobs\StreamingVideo;
use App\Mail\MailSendTest;
use Illuminate\Support\Facades\Mail;
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

Route::group(['middleware' => 'auth'] ,function () {
    Route::group(['middleware' => 'is_admin'], function () {
        Route::resource('projects', ProjectController::class);
    });
});

Route::get('/sendmail', function() {
    $send = Mail::to('ayoub@gmail.com')->send(new MailSendTest());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/projects', ProjectController::class)->middleware('auth');

Route::get('/queue',function() {
    StreamingVideo::dispatch()->onQueue('stream');
    return 'Finished';
});

Route::get('/stream',function() {
    event(StartStreaming::class);
    return 'Finished';
});

require __DIR__.'/auth.php';
