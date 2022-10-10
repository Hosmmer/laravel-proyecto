<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;



Route::view('/','home')->name('home');
Route::view('/quienes-somos','about')->name('about');

Route::view('/contact','contact')->name('contact');


Route::resource('portafolio', 'ProjectController')
    ->names('projects')
    ->parameters(['portafolio'=>'project']);
    // ->middleware('auth');

Route::post('contact', [MessagesController::class, 'store']);


require __DIR__.'/auth.php';

Auth::routes ();



// Desahabilitar el registro del formulario

// Route::match(['get', 'post'], 'register', function(){
//     return redirect('/');
// });
