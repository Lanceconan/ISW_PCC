<?php

Route::resource('consulta','QueryController');

Route::get('/',"StartController@Index");

Route::get('/admin',"StartController@loginAdmin");

Route::post('/admin',"StartController@validarAdmin");

// Validamos los datos de inicio de sesión.
Route::post('/', 'StartController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/index', 'AdminController@getIndex');

    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'StartController@logOut');

    //Servirá para buscar.
    Route::get('/buscar','AdminController@getIndex');

    Route::post('/buscar','AdminController@getIndex');

    Route::get('/modificar','AdminController@getModificar');

    Route::post('/modificar','AdminController@getModificar');

    Route::get('/borrar','AdminController@getBorrar');

    Route::post('/borrar','AdminController@postBorrar');

    Route::get('/opciones','AdminController@getConfig');

    Route::post('/opciones','AdminController@postConfig');

});

Route::group(array('before' => 'authProfe'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/index', 'TeacherController@getIndex');

    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'StartController@logOut');

    //Servirá para buscar.
    Route::get('/buscar','TeacherController@getIndex');

    Route::post('/buscar','TeacherController@getIndex');

    Route::get('/crear','TeacherController@getPlan');

    Route::post('/crear','TeacherController@getPlan');

    Route::get('/revisar','TeacherController@getRevisar');

    Route::post('/revisar','TeacherController@postRevisar');

    Route::get('/opciones','TeacherController@getConfig');

    Route::post('/opciones','TeacherController@postConfig');

});

Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/index', 'CommonController@getIndex');

    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'StartController@logOut');

    //Servirá para buscar.
    Route::get('/buscar','CommonController@getBuscar');

    Route::post('/buscar','CommonController@postBuscar');

    Route::get('/opciones','CommonController@getConfig');

    Route::post('/opciones','CommonController@postConfig');

});

Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/index', 'DirController@getIndex');

    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'StartController@logOut');

    //Servirá para buscar.
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
