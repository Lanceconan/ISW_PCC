<?php


Route::get('admin',"LoginController@loginAdmin");

Route::post('admin',"LoginController@validarAdmin");

Route::get('/',"StartController@Index");

Route::get('/revision',"LoginController@loginComun");
Route::post('/revision',"LoginController@validarComun");
Route::get('/profesor',"LoginController@loginProfe");
Route::post('/profesor',"LoginController@validarProfe");
Route::get('/registrar','RegisterController@getIndex');
Route::post('/registrar','RegisterController@postIndex');

 Route::group(array('before' => 'auth'), function(){ 
    Route::get('/index', 'AdminController@getIndex');

   
    Route::get('logout', 'StartController@logOut');

    
    Route::get('/buscar','AdminController@getIndex');

    Route::post('/buscar','AdminController@getIndex');

    Route::get('/modificar','AdminController@getModificar');

    Route::post('/modificar','AdminController@getModificar');

    Route::get('/borrar','AdminController@getBorrar');

    Route::post('/borrar','AdminController@postBorrar');

    Route::get('/opciones','AdminController@getConfig');

    Route::post('/opciones','AdminController@postConfig');

   
    Route::get('/index', 'TeacherController@getIndex');

    
    Route::get('logout', 'StartController@logOut');

    
    Route::get('/buscar','TeacherController@getIndex');

    Route::post('/buscar','TeacherController@getIndex');

    Route::get('/crear','TeacherController@getPlan');

    Route::post('/crear','TeacherController@getPlan');

    Route::get('/revisar','TeacherController@getRevisar');

    Route::post('/revisar','TeacherController@postRevisar');

    Route::get('/opciones','TeacherController@getConfig');

    Route::post('/opciones','TeacherController@postConfig');

   
    Route::get('/index', 'CommonController@getIndex');

   
    Route::get('logout', 'StartController@logOut');

    
    Route::get('/buscar','CommonController@getBuscar');

    Route::post('/buscar','CommonController@postBuscar');

    Route::get('/opciones','CommonController@getConfig');

    Route::post('/opciones','CommonController@postConfig');

  
    Route::get('/index', 'DirController@getIndex');

 
    Route::get('logout', 'StartController@logOut');

    Route::get('/buscar','DirController@getIndex');

    Route::post('/buscar','DirController@getIndex');

    Route::get('/revisar','DirController@getRevisar');

    Route::post('/revisar','DirController@postRevisar');

    Route::get('/crear','DirController@getPlan');

    Route::post('/crear','DirController@postPlan');

    Route::get('/opciones','DirController@getConfig');

    Route::post('/opciones','DirController@postConfig');

    Route::get('/reporte','DirController@getPDF');

    Route::get('/aprobar','DirController@getAprobar');

    Route::post('/aprobar','DirController@postAprobar');

});
