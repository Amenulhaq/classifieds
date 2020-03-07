<?php

// API routes  for classified
Route::prefix('{guard}/classifieds')->group(function () {
    Route::get('classified/form/{element}', 'ClassifiedAPIController@form');
    Route::resource('classified', 'ClassifiedAPIController');
});

// Public routes for classified
Route::get('classifieds/', 'ClassifiedPublicController@index');
Route::get('classifieds/{slug?}', 'ClassifiedPublicController@show');

if (Trans::isMultilingual()) {
    Route::group(
        [
            'prefix' => '{trans}',
            'where'  => ['trans' => Trans::keys('|')],
        ],
        function () {
            // Guard routes for classifieds
            Route::prefix('{guard}/classifieds')->group(function () {
                Route::get('classified/form/{element}', 'ClassifiedAPIController@form');
                Route::apiResource('classified', 'ClassifiedAPIController');
            });
            // Public routes for classifieds
            Route::get('classifieds/Classified', 'ClassifiedPublicController@getClassified');
        }
    );
}

