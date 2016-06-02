<?php

Route::group([
    'prefix' => 'api',
  //  'middleware' => 'auth:api',
    'namespace' => 'API'
], function () {
    Route::group(
        ['prefix' => 'v1'],
        function () {
            Route::resource('access/permissions', 'Access\PermissionController');
            Route::resource('access/groups', 'Access\GroupController');
            Route::resource('access/groups.permissions', 'Access\GroupsPermissionsController');
        }
    );

});