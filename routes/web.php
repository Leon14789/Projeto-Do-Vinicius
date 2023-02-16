<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    if( View::exists("pages.$folder.$resource") ){
        return view("pages.$folder.$resource");
    }else{
        return view("pages.$folder.$resource.index");
    }
});


Route::POST('/{folder}/{add-fun}/', [FuncionariosController::class, 'store'])->name('form.store');



