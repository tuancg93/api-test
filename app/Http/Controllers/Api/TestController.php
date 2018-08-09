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
     * @SWG\Post( path="/agency", summary="Tạo cửa hàng mới", description="
     *   Ghi chú
     *   name : Họ tên
     *   email : Email
     *   phone: Số điện thoại
     *   address : Địa chỉ
     *   code_id : Số chứng minh thư
     *   issued_date : Ngày cấp
     *   issued_from : Nơi cấp
     *   job : công việc
     *   address_agency : Địa chỉ đại lý
     *   total_area : Tổng diện tích
     *   length : Chiều dài
     *   wide : chiều rộng
     *   height: Chiều cao
     *   time_start : Thời gian bắt đầu
     *   status: trạng thái",
     *   tags={"Agency"},
     *   middleware="auth",
     *
     *   produces={"application/json"},
     * @SWG\Parameter( in="body", name="data", required=true, @SWG\Schema(ref="#/definitions/AgencyDTO")),
     * @SWG\Parameter( in="header", type="string", name="Authorization", default="kensei9x", required=true))
     *
     */
    function index(){


    }
}