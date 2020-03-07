<?php

// web routes  for classified
Route::prefix('{guard}/classifieds')->group(function () {
    Route::resource('classified', 'ClassifiedResourceController');
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
                Route::apiResource('classified', 'ClassifiedResourceController');
            });
            // Public routes for classifieds
            Route::get('classifieds/', 'ClassifiedPublicController@index');
            Route::get('classifieds/{slug?}', 'ClassifiedPublicController@show');
        }
    );
}

