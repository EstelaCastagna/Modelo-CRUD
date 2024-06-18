<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExemploCfkController;
use App\Http\Controllers\ExemploSfkController;
use App\Http\Controllers\LoginController;

//temporário
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::namespace('Login')->group(function () {

Route::get('/log', [LoginController::class, 'showLoginForm'])->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});


Route::namespace('Exemplo COM FK')->group(function () {
//CREATE
Route::get('/cadastrarCFK',[ExemploCfkController::class,'create'])->name('cadastro.comFK');
Route::get('/createCFK',[ExemploCfkController::class,''])->name('cadastro.comFK');

//READ

//UPDATE

//DELETE
});


Route::namespace('Exemplo SEM FK')->group(function () {
//CREATE
Route::get('/cadastrarSFK',[ExemploSfkController::class,'create'])->name('cadastro.semFK');
Route::get('/createSFK',[ExemploSfkController::class,''])->name('cadastro.semFK');
//READ

//UPDATE

//DELETE
});


//EXEMPLO COM FK
// Route::namespace('CRUD Cliente Fisico')->group(function () {

//     //create
//     Route::get('/clienteFisico/Cadastro', [ClienteFisicoController::class, 'create'])->name('cadastro.fisico');
//     Route::post('/clienteFisico/Incluir', [ClienteFisicoController::class, 'store'])->name('incluir.fisico');
//     //read
//     Route::get('/relatorioClienteFisico', [RelatorioClienteFisicoController::class, 'index'])->name('relatorio.clienteFisico');
//     Route::get('/pesquisarClienteFisico', [RelatorioClienteFisicoController::class, 'pesquisar'])->name('pesquisar.clienteFisico');
//     //update
//     Route::get('editar/{cpf_pessoa_fisica}/editarPessoaFisica', [ClienteFisicoController::class, 'edit'])->name('editar.fisico');
//     Route::put('/clienteFisicoAtualizar', [ClienteFisicoController::class, 'update'])->name('atualizar.fisico');
//     //delete
//     Route::delete('/deletar/{cpf}/deletarPessoaFisica', [ClienteFisicoController::class, 'destroy'])->name('deletar.fisico');
// });

//EXEMPLO SEM FK
// Route::namespace('CRUD Funcionarios')->group(function () {

//     //create
//     Route::get('/cadastroFuncionario', [FuncionarioController::class, 'create'])->name('cadastro.funcionario');
//     Route::post('incluirFuncionario', [FuncionarioController::class, 'store'])->name('incluir.funcionario');
//     //read
//     Route::get('/relatorioFuncionarios', [RelatorioFuncionarioController::class, 'index'])->name('relatorio.funcionarios');
//     Route::get('/pesquisarFuncionario', [RelatorioFuncionarioController::class, 'pesquisar'])->name('pesquisar.funcionario');
//     //update
//     Route::get('editar/{cpf_funcionario}/editarFuncionario', [FuncionarioController::class, 'edit'])->name('editar.funcionario');
//     Route::put('/funcionarioAtualizar', [FuncionarioController::class, 'update'])->name('atualizar.funcionario');
//     //delete
//     Route::delete('/deletar/{cpf_funcionario}/deletarFuncionario', [FuncionarioController::class, 'destroy'])->name('deletar.funcionario');
// });