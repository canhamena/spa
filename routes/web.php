<?php

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
Route::view('users','livewire.user.index')->middleware('auth')->name('users');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',  ['App\Http\Controllers\DashboardController', 'index'])->name('dashboard');


/*********************** spa *******************************/
 Route::get('/spa/index', ['App\Http\Controllers\SpaController', 'index'])->name('spa.index');
 Route::post('/spa/post', ['App\Http\Controllers\SpaController', 'store']);
 Route::post('/spa/popular_municipio', ['App\Http\Controllers\SpaController', 'popular_municipio'])->name("municipio.post");
 Route::post('/spa/popular_localidade', ['App\Http\Controllers\SpaController', 'popular_localidade'])->name("localidade.post");

 
 Route::post('/spa/update', ['App\Http\Controllers\SpaController', 'update'])->name('spa.update');

 /****************** serviço ****************************/
 Route::get('/servico/index', ['App\Http\Controllers\ServicoController', 'index'])->name('servico.index');
 Route::post('/servico/salvar', ['App\Http\Controllers\ServicoController', 'store']);
Route::post('/servico/update', ['App\Http\Controllers\ServicoController', 'update']);
Route::get('/servico/{id}/delete', ['App\Http\Controllers\ServicoController', 'destroy']);
Route::get('/servico/{id}/show', ['App\Http\Controllers\ServicoController', 'show'])->name('servico.show');


/************ tipo de servico *******************************/
Route::post('/tiposervico/salvar-servico', ['App\Http\Controllers\TipoServicoController', 'store_show_servico']);

Route::post('/tiposervico/salvar', ['App\Http\Controllers\TipoServicoController', 'store']);
Route::post('/tiposervico/update-servico', ['App\Http\Controllers\TipoServicoController', 'update_servico']);
Route::get('/tiposervico/{id}/delete', ['App\Http\Controllers\TipoServicoController', 'destroy_servico']);
Route::get('/tiposervico/index', ['App\Http\Controllers\TipoServicoController', 'index'])->name('tiposervico.index');
Route::get('/tiposervico/{id}/delete', ['App\Http\Controllers\TipoServicoController', 'destroy']);

Route::post('/spa/popular_tiposervico', ['App\Http\Controllers\TipoServicoController', 'popular_tiposervico'])->name("tiposervico.post");





/******************* routa site ****************************/
Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);
Route::get('/spa/servico', ['App\Http\Controllers\SiteController', 'servico']);
//Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);
//Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);
//Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);
//Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);
//Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);
//Route::get('/spa/sobre', ['App\Http\Controllers\SiteController', 'sobre']);

/****************************************** tipo ***************************************/
Route::get('/tipo/index', ['App\Http\Controllers\TipoController', 'index'])->name('tipo.index');
Route::post('/tipo/store', ['App\Http\Controllers\TipoController', 'store'])->name('tipo.store');
Route::post('/tipo/update', ['App\Http\Controllers\TipoController', 'update'])->name('tipo.update');


/****************** Localização *************************************/
Route::post('/localizacao/store', ['App\Http\Controllers\LocalizacaoController', 'store'])->name('localizacao.store');
Route::post('/localizacao/update', ['App\Http\Controllers\LocalizacaoController', 'update'])->name('localizacao.update');
Route::get('/localizacao/{id}/delete', ['App\Http\Controllers\LocalizacaoController', 'destroy'])->name('localizacao.delete');


/****************** Contactos *******************************************************************/

Route::post('/contacto/store', ['App\Http\Controllers\ContactoController', 'store'])->name('contacto.store');
Route::post('/contacto/update', ['App\Http\Controllers\ContactoController', 'update'])->name('contacto.update');
Route::get('/contacto/{id}/delete', ['App\Http\Controllers\ContactoController', 'destroy'])->name('contacto.delete');


/******************  Pagamento **********************************/
Route::post('/pagamento/store', ['App\Http\Controllers\PagamentoController', 'store'])->name('pagamento.store');
Route::get('/pagamento/{id}/create', ['App\Http\Controllers\PagamentoController', 'create'])->name('pagamento.factura');
Route::post('/pagamento/store_factura', ['App\Http\Controllers\PagamentoController', 'store_factura'])->name('pagamento.store_factura');

Route::get('/pagamento/{id}/pagamento_marcacao', ['App\Http\Controllers\PagamentoController', 'pagamento_marcacao'])->name('pagamento.marcacao');

Route::post('/pagamento/update_factura', ['App\Http\Controllers\PagamentoController', 'factura_update'])->name('pagamento.update_factura');

Route::get('/pagamento/{id}/delete_factura', ['App\Http\Controllers\PagamentoController', 'factura_delete'])->name('pagamento.delete_factura');

Route::get('/pagamento/index', ['App\Http\Controllers\PagamentoController', 'index'])->name('pagamento.index');

Route::get('/pagamento/{id}/show', ['App\Http\Controllers\PagamentoController', 'show'])->name('pagamento.show');
Route::get('/pagamento/{id}/delete', ['App\Http\Controllers\PagamentoController', 'destroy'])->name('pagamento.delete');

/**************************** Reservas  *******************************************/

Route::get('/reserva/index', ['App\Http\Controllers\ReservaController', 'index'])->name('reserva.index');
Route::post('/reserva/store', ['App\Http\Controllers\ReservaController', 'store'])->name('reserva.store');
Route::post('/reserva/update', ['App\Http\Controllers\ReservaController', 'update'])->name('reserva.update');
Route::get('/reserva/{id}/cancelar', ['App\Http\Controllers\ReservaController', 'cancelar'])->name('reserva.cancelar');
Route::get('/reserva/{id}/show', ['App\Http\Controllers\ReservaController', 'show'])->name('reserva.show');


/*************** Agendamento *******************************/
Route::post('/agenda/store', ['App\Http\Controllers\AgendaAtendimentoController', 'store'])->name('agenda.store');
Route::post('/agenda/popular_tiposervico', ['App\Http\Controllers\AgendaAtendimentoController', 'tiposervico'])->name("tiposervico_local.post");


/************** Estatistica ****************************** */
Route::get('/estatistica/marcacao', ['App\Http\Controllers\EstatisticaController', 'marcacao'])->name('estatistica.marcacao');
Route::get('/estatistica/servico', ['App\Http\Controllers\EstatisticaController', 'servico'])->name('estatistica.servico');











