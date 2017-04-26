<?php

Route::get('/persons',[
    'uses'=>'PRPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count?}',[
    'uses'=>'PRFakeDataController@generatePersons'
]);

Route::get('/clients',[
    'uses'=>'PRclientsController@index'
]);

Route::get('/generate-fake-data/clients/{count?}',[
    'uses'=>'PRFakeDataController@generateClients'
]);
Route::get('/clientsPersonType',[
    'uses'=>'PRclientsPersonTypeController@index'
]);

Route::get('/generate-fake-data/clientsPersonType/{count?}',[
    'uses'=>'PRFakeDataController@generateClientsPersonsType'
]);
Route::get('/loginName',[
    'uses'=>'PRLoginNameController@index'
]);

Route::get('/generate-fake-data/loginName/{count?}',[
    'uses'=>'PRFakeDataController@generateLoginName'
]);
Route::get('/logins',[
    'uses'=>'PRLoginsController@index'
]);

Route::get('/generate-fake-data/logins/{count?}',[
    'uses'=>'PRFakeDataController@generateLogins'
]);



Route::get('/Ptypes',[
    'uses'=>'PRLoginsController@index'
]);

Route::get('/generate-fake-data/Ptyprs/{count?}',[
    'uses'=>'PRFakeDataController@generateProjetTypes'
]);
Route::get('/project',[
    'uses'=>'PRProjectController@index'
]);

Route::get('/generate-fake-data/project/{count?}',[
    'uses'=>'PRFakeDataController@generateProject'
]);

Route::get('/CPCC',[
    'uses'=>'PRclientPersonConectedController@index'
]);

Route::get('/generate-fake-data/CPCC/{count?}',[
    'uses'=>'PRFakeDataController@generateClientPersonConected'
]);
Route::get('/PLCC',[
    'uses'=>'PRpojectLoginConnectionsController@index'
]);

Route::get('/generate-fake-data/PLCC/{count?}',[
    'uses'=>'PRFakeDataController@generatePojectLoginConnections'
]);
Route::get('/PTypes',[
    'uses'=>'PRpersonTypesController@index'
]);

Route::get('/generate-fake-data/PTypes/{count?}',[
    'uses'=>'PRFakeDataController@generatePersonTypes'
]);
Route::get('/PC',[
    'uses'=>'PRprojectConnectionsControllers@index'
]);

Route::get('/generate-fake-data/PC/{count?}',[
    'uses'=>'PRFakeDataController@generateProjectConnections'
]);

Route::get('/',function ()
{
    return view('main');
});




