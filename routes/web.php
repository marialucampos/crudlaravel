<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', ['as' => 'login',
'uses'=>'App\Http\Controllers\loginController@index']);

Route::post('/login/entrar',['as'=>'login.entrar',
'uses'=>'App\Http\Controllers\loginController@entrar']);

Route::get('/login/sair',['as'=>'login.sair',
'uses'=>'App\Http\Controllers\loginController@sair']);

Route::middleware('auth')->group( function (){

Route::get('/admin/cursos',
['as' =>'admin.cursos',
'uses'=>'App\Http\Controllers\Admin\CursoController@index']);

//chama a funcao editar por id de curso
Route::get('/admin/cursos/editar/{id}',
['as' =>'admin.cursos.editar',
'uses'=>'App\Http\Controllers\Admin\CursoController@editar']);

//chama a funcao atualizar pelo ID de curso
Route::put('/admin/cursos/atualizar/{id}',
['as' =>'admin.cursos.atualizar',
'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);

//chama a funcao excluir pelo ID de curso
Route::get('/admin/cursos/excluir/{id}',
['as' =>'admin.cursos.excluir',
'uses'=>'App\Http\Controllers\Admin\CursoController@excluir']);

Route::put('/admin/cursos/atualizar/{id}',
['as'=>'admin.cursos.atualizar', 
'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);

// Rota para exibir o formulário (GET)
Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'App\Http\Controllers\Admin\CursoController@adicionar']);

// Rota para processar os dados do formulário (POST)
Route::post('/admin/cursos/adicionar', ['as' => 'admin.cursos.salvar', 'uses' => 'App\Http\Controllers\Admin\CursoController@salvar']);


Route::get('/admin/alunos',
    [
        'as' => 'admin.alunos',
        'uses' => 'App\Http\Controllers\Admin\AlunoController@index'
    ]
);
Route::get(
    '/admin/alunos/adicionar',
    [
        'as' => 'admin.alunos.adicionar',
        'uses' => 'App\Http\Controllers\Admin\AlunoController@adicionar'
    ]
);
Route::post(
    '/admin/alunos/salvar',
    [
        'as' => 'admin.alunos.salvar',
        'uses' => 'App\Http\Controllers\Admin\AlunoController@salvar'
    ]
);
Route::get(
    '/admin/alunos/editar/{id}',
    [
        'as' => 'admin.alunos.editar',
        'uses' => 'App\Http\Controllers\Admin\AlunoController@editar'
    ]
);
Route::put(
    '/admin/alunos/atualizar/{id}',
    [
        'as' => 'admin.alunos.atualizar',
        'uses' => 'App\Http\Controllers\Admin\AlunoController@atualizar'
    ]
);
Route::get(
    '/admin/alunos/excluir/{id}',
    [
        'as' => 'admin.alunos.excluir',
        'uses' => 'App\Http\Controllers\Admin\AlunoController@excluir'
    ]
);

Route::get(
    '/', 
    [
        'as'=>'home', 
        'uses'=> 'App\Http\Controllers\homeController@index'
    ]
);

});