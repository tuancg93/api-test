<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 10:38 AM
 */

namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class TestController extends ApiController
{
    /**
     * @SWG\Get(
     *     path="/create",
     *     tags={"App"},
     *     description="Return a user's first and last name"
     * )
     */
    function index(Request $request)
    {

        return response(["abc"=>$request], 200)
            ->header('Content-Type', 'application/json');

    }

    /**
     * @SWG\Get(
     *     path="/haha",
     *     tags={"App"},
     *     description="Return a user's first and last name",
     *     @SWG\Parameter(
     *         name="firstname",
     *         in="query",
     *         type="string",
     *         description="Your first name",
     *         required=true,
     *     ),
     *     @SWG\Parameter(
     *         name="lastname",
     *         in="query",
     *         type="string",
     *         description="Your last name",
     *         required=true,
     *     )
     * )
     */
    function haha(Request $request)
    {
        return response(["abc"=>$request->query()], 200)
            ->header('Content-Type', 'application/json');

    }
}