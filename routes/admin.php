<?php
//admin
Route::group([
    'prefix' => 'tukangna',
    'as' => 'admin.'
], function () {

    Route::group(['middleware' => 'admin'], function () {

        Route::get('/', 'AdminController@dashboard')->name('dashboard');

        //administrasi Desa
        Route::group([
            'prefix' => 'desa',
            'as' => 'desa.'
        ], function () {

            Route::get('/', 'Admin\DesaController@index')->name('index');
            Route::get('/data.json', 'Admin\DesaController@anyData')->name('data');

            Route::get('/tambah.html', 'Admin\DesaController@tambah')->name('tambah');
            Route::post('/tambah.html', 'Admin\DesaController@doTambah')->name('do_tambah');

            Route::get('/statistik.html', 'Admin\DesaController@statistik')->name('statistik');

            Route::get('/maps.html', 'Admin/DesaController@peta')->name('peta');



        });

    });

    Route::get('/login.html', 'AdminController@showLoginForm')->name('login');
    Route::post('/login.html', 'AdminController@doLogin')->name('do_login');
    Route::get('/logout.html', 'AdminController@logout')->name('logout');
});
