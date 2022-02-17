<?php

// Galleries Management
Route::group(['namespace' => 'Galleries'], function () {
    Route::resource('galleries', 'GalleriesController', ['except' => ['show']]);

    //For DataTables
    Route::post('galleries/get', 'GalleriesTableController')->name('galleries.get');
});
