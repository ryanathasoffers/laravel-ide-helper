<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Filename
    |--------------------------------------------------------------------------
    |
    | The default path to the helper file
    |
    */

    'filename' => '_ide_helper.php',

    /*
    |--------------------------------------------------------------------------
    | Helper files to include
    |--------------------------------------------------------------------------
    |
    | Include helper files. By default not included, but can be toggled with the
    | -- helpers (-H) option. Extra helper files can be included.
    |
    */

    'include_helpers' => false,

    'helper_files' => array(
        base_path().'/vendor/laravel/framework/src/Illuminate/Support/helpers.php',
    ),


    /*
    |--------------------------------------------------------------------------
    | Extra classes
    |--------------------------------------------------------------------------
    |
    | These implementations are not really extended, but called with magic functions
    |
    */

    'extra' => array(
        'Auth'      => array('Illuminate\Auth\Guard'),
        'Cache'     => array('Illuminate\Cache\StoreInterface', 'Illuminate\Cache\Repository'),
        'DB'        => array('Illuminate\Database\Connection'),
        'Queue'     => array('Illuminate\Queue\QueueInterface'),
        'Eloquent'  => array('Illuminate\Database\Eloquent\Builder', 'Illuminate\Database\Query\Builder'),
    ),

);
