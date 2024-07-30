<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Turmas por Curso
Route::get('turma/{curso_id}', 'App\Http\Controllers\TurmaController@getClassesByCourse');
// Categorias por Curso
Route::get('categoria/{curso_id}', 'App\Http\Controllers\CategoriaController@getCategoriesByCourse');
// Alunos por Turma
Route::get('aluno/{turma_id}', 'App\Http\Controllers\AlunoController@getStudentsByClass');