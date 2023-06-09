<?php

Auth::routes(['verify'=>true]);



Route::view('/','site.index')->name('site.index');
Route::view('/termo-de-uso','site.termodeuso');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/feedback', 'FeedbackController@create')->name('site.feedback');
Route::post('/feedback', 'FeedbackController@store')->name('feedback.store');

Route::get('/proponentes','Investidor\InvestimentosController@lista_oscs')->name('proponentes_lista');
Route::get('/portfolio','Investidor\InvestimentosController@lista_projetos')->name('projetos_lista');
Route::post('/portfolio','Investidor\InvestimentosController@lista_projetos')->name('projetos_lista');

Route::get('/proponentes/{id}','Investidor\InvestimentosController@detalhe_oscs')->name('detalhe.osc');

Route::get('/projeto/{num_pronac}','Investidor\InvestimentosController@detalhe_projeto')->name('detalhe.projeto');

//Grupo de Rotas para Investidor
Route::group( ['middleware'=> ['auth','verified','permission:investidor-pj,investidor-pf'],'prefix'=>'painel-investidor','namespace'=>'Investidor'],function(){

    Route::get('/perfil','PerfilController@index')->name('perfil.index');
    Route::get('/meus-dados','PerfilController@perfil')->name('perfil.show');
    Route::post('/perfil/atualiza','PerfilController@update')->name('perfil.update');

    Route::resource('investimentos','InvestimentosController');

    Route::get('/investir/{id}','CheckoutController@formIncentivar')->name('investir');
    Route::post('/pagar','CheckoutController@pagar')->name('pagar');
    Route::get('/investimento/d/{id}','InvestimentosController@cancelar')->name('investimento.cancelar');
    Route::get('/investimento/{status}','InvestimentosController@callback');
    Route::get('/investimento/detalhe/{id}','InvestimentosController@detalhe')->name('investimento.detalhe');
});

//Grupo de Rotas para OSC
Route::group( ['middleware'=> ['auth','verified','permission:osc'],'prefix'=>'dashboard','namespace'=>'Osc'],function() {

   Route::view('/','layouts.dashboard')->name('osc.dashboard');

    Route::post('/uploadFoto','OscController@uploadFoto')->name('osc.uploadFoto');

    Route::resource('osc','OscController');
    Route::resource('projetos','ProjetosController');

    Route::post('/upload','ProjetosController@uploadFile')->name('projeto.uplaodFile');

    Route::resource('documentos','DocumentosController');

    Route::resource('galeria','GaleriaController');

    Route::get('s3-remover','GaleriaController@removerGaleria')->name('s3-remover');


    Route::get('/meus-investimentos','OscController@getInvestimentos')->name('investimentos');

    Route::resource('recibos','RecibosController');

    Route::get('recibos/{investimento_id}/create','RecibosController@createWithInvestimento')->name('recibos.createWithInvestimento');
    Route::post('recibos/{investimento_id}/create','RecibosController@storeWithInvestimento')->name('recibos.storeWithInvestimento');

    Route::get('projeto/{id}/galeria','ProjetosController@galeria')->name('projeto.galeria');
    Route::post('galeria.save','ProjetosController@save')->name('galeria.save');
    Route::get('projeto/i/{id}','ProjetosController@mudarInativo')->name('projeto.inativo');

    Route::get('projeto/ativar/{id}', 'ProjetosController@publicate')->name('projeto.publicate');


    Route::get('/detalhe','OscController@landingPage')->name('osc.landingPage');
    Route::get('/detalhe/projeto/{id}','OscController@landingPageProjeto')->name('projeto.landingPage');
});

//# ROTAS PARA A AREA ADMINISTRATIVA

Route::group(['middleware'=> ['auth', 'permission:admin'],'prefix'=>'sistema'],function(){
    Route::get('/dashboard','Admin\DashboardController@index')->name('admin.index');

    Route::resource('admin-osc','Admin\OscController');
    Route::get('admin-osc/active/{id}','Admin\OscController@active')->name('oscs.active');


    Route::resource('admin-users','Admin\UsersController');
    Route::get('admin-users/active/{id}','Admin\UsersController@active')->name('users.active');

    Route::get('admin-projetos/active/{id}','Admin\ProjetosController@active')->name('projetos.active');
    Route::resource('admin-projetos','Admin\ProjetosController');

    Route::resource('admin-investimentos','Admin\InvestimentosController');

    Route::resource('admin-recibos','Admin\RecibosController');

    Route::get('recibos/{investimento_id}/create','Admin\RecibosController@createWithInvestimento')->name('admin-recibos.createWithInvestimento');
    Route::post('recibos/{investimento_id}/create','Admin\RecibosController@storeWithInvestimento')->name('admin-recibos.storeWithInvestimento');
});

//# ROTAS EM COMUM ENTRE ADMIN E OSC

Route::group(['middleware' => 'auth', 'permission:osc,admin', 'prefix'=>'dashboard'], function () {
    Route::get('/projetos/{id}/investimentos', 'Osc\ProjetosController@getInvestimentos');
});









