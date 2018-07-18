<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit444e163ae7f2491afbac6c694d5fc5b6
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hezehua\\Testkz\\Tests\\' => 21,
            'Hezehua\\Testkz\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hezehua\\Testkz\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Hezehua\\Testkz\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit444e163ae7f2491afbac6c694d5fc5b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit444e163ae7f2491afbac6c694d5fc5b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}