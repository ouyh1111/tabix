<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd153e2a5442461bfce4df9d4785be4d8
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
        '98794879b9f3bba010855e1c65c9d901' => __DIR__ . '/..' . '/smi2/phpclickhouse/include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'P' => 
        array (
            'PHPSQLParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/greenlion/php-sql-parser/src',
            ),
        ),
        'A' => 
        array (
            'Analog' => 
            array (
                0 => __DIR__ . '/..' . '/analog/analog/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd153e2a5442461bfce4df9d4785be4d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd153e2a5442461bfce4df9d4785be4d8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd153e2a5442461bfce4df9d4785be4d8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
