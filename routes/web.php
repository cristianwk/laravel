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

Route::resource('products', 'ProductController');

/* subistituindo todas as rotas **products** abaixo
Route::delete('/products/{id}', 'ProductController@deletar')->name('products.deletar');

Route::put('/products/{id}', 'ProductController@update')->name('products.update');

Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit');

Route::get('/products/create', 'ProductController@create')->name('products.create');

Route::get('/products/{id}', 'ProductController@show')->name('products.show');

Route::get('/products', 'ProductController@index')->name('products.index');

Route::post('/products', 'ProductController@salvar')->name('products.salvar');

*/



Route::get('/login', function () {
    return 'login';
})->name('login');

//redireciona para home
Route::get('redirect', function(){
    return redirect('/');
});

//precisa estar autenticado para acessar
//Route::get('/admin/dashboard', function(){
  //  return redirect('/');
//})->middleware('auth');
//ou posso chamar varias rotas tipo get pelo middlewarePriority
Route::middleware([''])->group(function(){
    
    Route::get('/admin/dashboard', function(){
        return 'Home Admin Dashboard';
    });

    Route::get('/admin/financeiro', function(){
        return 'Financeiro Admin';
    });

    Route::get('/', 'Admin\TesteController@test');

});

//redireciona nome da rota
Route::get('/nome-url', function(){
    return 'Redireciona para o nome da Rota';
})->name('url.name');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});

//aceita qualquer verbo
Route::get('/any', function () {
    return 'any';
});

Route::get('categorias/{id}', function ($id) {
    return "Produtos da categoria: {$id}";
});

//usando o ? para ser opcional o parametro
// para isso o $id tem que ser default vazio
Route::get('produtos/{id?}', function ($id = '') {
    return "Produtos da categoria: {$id}";
});
