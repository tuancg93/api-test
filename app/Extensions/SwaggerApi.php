<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 10:14 AM
 */

namespace App\Extensions;

use Illuminate\Support\Facades\Route;
use Swagger\Analysis;

use Swagger\StaticAnalyser;
use Swagger\Util;

class SwaggerApi implements SwaggerInterface
{
    use Utils;
    protected $methods = [
        'get',
        'put', 'post', 'delete'];

    function scan()
    {
        $options = [];
        $dir = app_path('Http/Controllers/');
        $root_namespace = "App\Http\Controllers\\";

        $analyser = array_key_exists('analyser', $options) ? $options['analyser'] : new StaticAnalyser();
        $analysis = array_key_exists('analysis', $options) ? $options['analysis'] : new Analysis();
        $processors = array_key_exists('processors', $options) ? $options['processors'] : Analysis::processors();
        $exclude = array_key_exists('exclude', $options) ? $options['exclude'] : null;


        // Crawl directory and parse all files
        $finder = Util::finder($dir, $exclude);
        foreach ($finder as $file) {
            $analysis->addAnalysis($analyser->fromFile($file->getPathname()));
        }
        // Post processing
        $analysis->process($processors);
        $paths = $analysis->swagger->paths;

        foreach ($paths as $k => $path) {
            /*get namespace group*/
            foreach ($this->methods as $m => $method) {
                if (!is_null($path->$method)) {
                    $context = $analysis->getContext($path->$method);
                    $path_namespace = $context->namespace;
                    $func = $context->method;
                    $class = $context->class;
                    Route::$method($path->path, array('uses'=> $path_namespace."\\".$class.'@'.$func));
                }
            }
        }
        //exit;
        // Validation (Generate notices & warnings)
      //  dd($paths)
     //   $analysis->validate();
        return $analysis->swagger;
    }

    protected function createNameSpaceGroup($root_namespace, $path_namespace)
    {
        $namespace = substr($path_namespace, strlen($root_namespace), strlen($path_namespace));
        return $namespace;
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