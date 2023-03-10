<?php

use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\SeguradoraController;
use Illuminate\Support\Facades\Route;


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
// Deletar Funcionario
Route::get('/edit-fun/{id}/excluir', [FuncionariosController::class, 'excluir'])->name('excluir');
// Financeiro
Route::get('/financeiro/fun-fin', [FuncionariosController::class, 'FinanceiroFuncionarios']);




// Rotas de Veiculos 
Route::post('/add-vei/adicionar-veiculo', [VeiculosController::class, 'criar'])->name('criar');
// Listar Veiculos
Route::get('/edit-vei/editar-veiculo', [VeiculosController::class, 'list']);
// Editar Veiculos
Route::get('/edit-vei/{id}/edition', [VeiculosController::class, 'edition'])->name('edition');
Route::post('/edit-vei/{id}/edit', [VeiculosController::class, 'edit'])->name('edit');
Route::get('/edit-vei/{id}/apagar', [VeiculosController::class, 'apagar'])->name('apagar');



// Rotas de Seguradora 
Route::post('/add-seg/adicionar-seguradora', [SeguradoraController::class, 'criacao'])->name('criacao');
// Listar Seguradora
Route::get('/edit-seg/editar-seguradora', [SeguradoraController::class, 'listagem']);
// Editar Seguradora
Route::get('/edit-seg/{id}/edicionar', [SeguradoraController::class, 'edicionar'])->name('edicionar');
Route::post('/edit-seg/{id}/mudar', [SeguradoraController::class, 'mudar'])->name('mudar');
// Deletar seguradora
Route::get('/edit-seg/{id}/deletar', [SeguradoraController::class, 'deletar'])->name('deletar');
// Financeiro
Route::get('/financeiro/seg-fin', [SeguradoraController::class, 'pao']);




Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    if( View::exists("pages.$folder.$resource") ){
        return view("pages.$folder.$resource");
    }else{
        return view("pages.$folder.$resource.index");
    }
});

