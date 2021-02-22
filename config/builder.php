<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Path which laravel will check for CMS views
    | Locally we will check the cms/views directory.
    |
    */

  'path' => env('CMS_DIR', base_path('cms/views')).env('CMS_PATH'),

    /*
    |--------------------------------------------------------------------------
    | Routes file location
    |--------------------------------------------------------------------------
    |
    | This is the location of the cms routes file stored for your application.
    |
    */

  'route' => env('CMS_DIR', base_path('cms')).env('CMS_PATH')."/cms.php",

    /*
    |--------------------------------------------------------------------------
    | Register routes
    |--------------------------------------------------------------------------
    |
    | This determines if we should automatically register the cms routes.
    | Disable this if you need to customize the route registration
    |
    */
  'registers_routes' => true

];
