<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('category', 'CategoryCrudController');
    Route::crud('banner', 'BannerCrudController');
    Route::crud('blog', 'BlogCrudController');
    Route::crud('contact', 'ContactCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('config', 'ConfigCrudController');
}); // this should be the absolute last line of this file