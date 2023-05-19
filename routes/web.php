<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
use App\Http\Controllers\funcionarioController;
use App\Http\Controllers\poltronaController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/cadastro-filme',[filmeController::class,'buscaCadastroFilme'])->name('buscar-cadastro-filme');
Route::post('/cadastro-filme',[filmeController::class,'cadastrarFilme'])->name('cadastro-filme');
Route::get('/gerenciar-filme',[filmeController::class,'MostrarGerenciadorFilme'])->name('gerenciar-filme');
Route::get('/cadastro-funcionario',[funcionarioController::class,'buscarCadastroFuncionario'])->name('buscar-cadastro-funcionario');
Route::post('/cadastro-funcionario',[funcionarioController::class,'cadastrarFuncionario'])->name('cadastro-funcionario');
Route::get('/gerenciar-funcionario',[funcionarioController::class,'MostrarGerenciadorFuncionario'])->name('gerenciar-funcionario');

Route::delete('/gerenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class,'ApagarBancoFuncionario'])->name('apagar-funcionario');
Route::delete('/gerenciar-filme/{registrosFilmes}', [filmeController::class, 'ApagarFilme'])->name('apagar-filme');

Route::get('/alterar-funcionario/{registroFuncionario}',[funcionarioController::class,'MostrarRegistrosFuncionario'])->name('mostrar-funcionario');
Route::put('/gerenciar-funcionario/{registroFuncionario}',[funcionarioController::class,'AlterarBancoFuncionario'])->name('alterar-banco-funcionario');
Route::get('/alterar-filme/{resgistroFilme}',[filmeController::class,'MostrarRegistrosFilme'])->name('mostrar-filme');
Route::put('/gerenciar-filme/{registroFilme}',[filmeController::class,'AlterarBancoFilme'])->name('alterar-banco-filme');

//Poltrona

//O primeiro chama a View cadastrar.
Route::get('/cadastro-poltrona',[poltronaController::class,'buscarCadastroPoltrona'])->name('busca-cadastro-poltrona');
Route::post('/cadastro-poltrona',[poltronaController::class,'cadastrarPoltrona'])->name('cadastro-poltrona');
Route::get('/gerenciar-poltrona',[poltronaController::class,'MostrarGerenciadorPoltrona'])->name('gerenciar-poltrona');
Route::delete('/gerenciar-poltrona/{registrosPoltronas}',[poltronaController::class,'ApagarPoltrona'])->name('apagar-poltrona');
Route::put('/gerenciar-poltrona/{registrosPoltronas}',[poltronaController::class,'AlterarBancoPoltrona'])->name('alterar-banco-poltrona');


Route::delete('/gerenciar-funcionario/{registrosFuncionarios}',[funcionarioController::class,'ApagarFuncionario'])->name('apagar-funcionario');
Route::delete('/gerenciar-filme/{registrosFilmes}', [filmeController::class, 'ApagarFilme'])->name('apagar-filme');


