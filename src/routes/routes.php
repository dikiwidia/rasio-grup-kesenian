<?php

Route::group(['prefix' => 'api/rasio-grup-kesenian', 'middleware' => ['web']], function() {
    $controllers = (object) [
        'index'     => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@index',
        'create'    => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@create',
        'show'      => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@show',
        'store'     => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@store',
        'edit'      => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@edit',
        'update'    => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@update',
        'destroy'   => 'Bantenprov\RasioBankDunia\Http\Controllers\RasioBankDuniaController@destroy',
    ];

    Route::get('/',             $controllers->index)->name('rasio-grup-kesenian.index');
    Route::get('/create',       $controllers->create)->name('rasio-grup-kesenian.create');
    Route::get('/{id}',         $controllers->show)->name('rasio-grup-kesenian.show');
    Route::post('/',            $controllers->store)->name('rasio-grup-kesenian.store');
    Route::get('/{id}/edit',    $controllers->edit)->name('rasio-grup-kesenian.edit');
    Route::put('/{id}',         $controllers->update)->name('rasio-grup-kesenian.update');
    Route::delete('/{id}',      $controllers->destroy)->name('rasio-grup-kesenian.destroy');
});
