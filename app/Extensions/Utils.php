<?php

namespace App\Extensions;
trait Utils
{
    function pathToNameSpace($path)
    {
        $namespace = str_replace(app_path(), '', $path);
        $namespace = substr($namespace, 0, strlen($namespace) - 4);
        return "App" . $namespace;
    }


}