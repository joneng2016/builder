<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca36dea74f194a69907476d7b4511bda
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca36dea74f194a69907476d7b4511bda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca36dea74f194a69907476d7b4511bda::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
