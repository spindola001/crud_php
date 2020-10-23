<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite88778715d6b181f64cd31ea0deaf87b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite88778715d6b181f64cd31ea0deaf87b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite88778715d6b181f64cd31ea0deaf87b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}