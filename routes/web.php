<?php

use App\Http\Controllers\FuncionariosController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';




// Rotas de Funcionarios 

//Criar Funcionario
Route::post('/add-fun/adicionar-funcionarios', [FuncionariosController::class, 'store'])->name('create');
// Listar Funcionario
Route::get('/edit-fun/editar-funcionario', [FuncionariosController::class, 'listar']);
// Editar Funcionario
Route::get('/edit-fun/{id}/edicao', [FuncionariosController::class, 'edicao'])->name('edicao');
Route::post('/edit-fun/{id}/editar', [FuncionariosController::class, 'editar'])->name('editar');







Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    if( View::exists("pages.$folder.$resource") ){
        return view("pages.$folder.$resource");
    }else{
        return view("pages.$folder.$resource.index");
    }
});

