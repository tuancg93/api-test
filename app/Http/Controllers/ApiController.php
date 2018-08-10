<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 11:32 AM
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="laravel.localhost",
 *     schemes={"http"},
 *
 *     @SWG\Info(
 *         version="1.0",
 *         title="1m52",
 *         @SWG\Contact(name="Marco Raddatz", url="https://www.marcoraddatz.com"),
 *     )
 * ),
 * @SWG\Response(
 *     response="BaseResponse",
 *     description="base response",
 *     @SWG\Schema(
 *          @SWG\Property(
 *              property="status",
 *              type="string"
 *          )
 *     )
 * )
 */
class ApiController extends BaseController
{

}