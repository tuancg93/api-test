<?php
namespace App\Swagger;

interface SwaggerInterface{
    function scan();
    function write();
    function clearCache();
}
