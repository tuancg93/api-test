<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 11:32 AM
 */

namespace App\Http\Controllers;

use App\Extensions\SwaggerInterface;


class RoutesController
{
    protected $swaggerApi;
    function __construct(SwaggerInterface $swaggerApi)
    {
        $this->swaggerApi = $swaggerApi;
    }

    function index()
    {
        return $this->swaggerApi->scan();
    }
}