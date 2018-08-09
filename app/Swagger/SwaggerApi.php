<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 10:14 AM
 */

namespace App\Swagger;


class SwaggerApi implements SwaggerInterface
{

    function scan()
    {
        $path = app_path('Http\Controllers');
        $scan = \Swagger\scan($path,['exclude']);
        header('Content-Type: application/json');
        return $scan;
    }

    function write()
    {
        // TODO: Implement write() method.
    }

    function clearCache()
    {
        // TODO: Implement clearCache() method.
    }
}