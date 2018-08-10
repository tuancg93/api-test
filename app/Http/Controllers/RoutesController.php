<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 11:32 AM
 */

namespace App\Http\Controllers;


class RoutesController
{
    function index()
    {
        $path = app_path('Http/Controllers/');
        $read = \Swagger\scan($path);

        header('Content-Type: application/json');
        echo $read;
        exit;
        return json_enconde($read);

    }
}