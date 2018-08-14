<?php
namespace App\Extensions;

interface SwaggerInterface{
    function scan();
    function write();
    function clearCache();
}
