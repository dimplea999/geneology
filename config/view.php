<?php

/**
 *  Laravel view configuration file
 *
 * @name       view.php
 * @category   Configuration
 * @package    Configuration
 * @author     Ajay Bhosale <ajay.bhosale@silicus.com>
 * @license    Silicus http://www.silicus.com/
 * @version    GIT: $Id: 991cc5ef95efe3c27342a1e8f252e7d7ebd575d2 $
 * @link       None
 * @filesource
 */
return [

    /*
      |--------------------------------------------------------------------------
      | View Storage Paths
      |--------------------------------------------------------------------------
      |
      | Most templating systems load templates from disk. Here you may specify
      | an array of paths that should be checked for your views. Of course
      | the usual Laravel view path has already been registered for you.
      |
     */

    'paths'    => [
        realpath(base_path('public/theme')),
    ],
    /*
      |--------------------------------------------------------------------------
      | Compiled View Path
      |--------------------------------------------------------------------------
      |
      | This option determines where all the compiled Blade templates will be
      | stored for your application. Typically, this is within the storage
      | directory. However, as usual, you are free to change this value.
      |
     */
    'compiled' => realpath(storage_path('framework/views')),
    'cashCss'  => env('CASH_CSS', true),
    'cashJs'   => env('CASH_JS', true),
];
