<?php
/**
 * Created by PhpStorm.
 * User: anhpt
 * Date: 8/7/2018
 * Time: 10:14 AM
 */

namespace App\Extensions;

use Doctrine\Common\Annotations\SimpleAnnotationReader;
use ReflectionClass;
use Swagger\Analysis;
use Swagger\StaticAnalyser;
use Swagger\Util;
use Symfony\Component\Routing\Loader\AnnotationFileLoader;

class SwaggerApi implements SwaggerInterface
{
    use Utils;

    function scan()
    {

        $path = app_path('Http/Controllers/');
        $analyser = new StaticAnalyser();
        $analysis = new Analysis();
        $processors = Analysis::processors();
        $finder = Util::finder($path);
        $annotationReader = new SimpleAnnotationReader();
        $annotationReader->addNamespace('Swagger\Annotations\Swagger');
        foreach ($finder as $file) {
            $analysis->addAnalysis($analyser->fromFile($file->getPathname()));

        }
        $analysis->process($processors);

        return $analysis->swagger;
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