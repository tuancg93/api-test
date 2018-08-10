<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 10:38 AM
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;

class TestController extends ApiController
{
    /**
     * @SWG\Get( path="/app/{id}", summary="Chi tiết app", tags={"App"}, produces={"application/json"},
     *     @SWG\Parameter( in="path", name="id", required=true),
     *     @SWG\Parameter( in="query", name="f"),
     *     @SWG\Parameter( in="header", type="string", name="Authorization", default="", required=true))
     *
     * @ScopeId(description="Xem chi tiết", ignore="true")
     */
    function index()
    {
        echo 232323;

    }
}