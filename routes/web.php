<?php

Route::get('/persons',[
    'uses'=>'PRPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count?}',[
    'uses'=>'PRFakeDataController@generatePersons'
]);

