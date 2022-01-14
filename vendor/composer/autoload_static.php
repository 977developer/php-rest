<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f4b434f37d1c0f4a1ab2cdff6f8dbfe
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

    public static $classMap = array (
        'App\\App' => __DIR__ . '/../..' . '/app/App.php',
        'App\\Helpers\\Request' => __DIR__ . '/../..' . '/app/Helpers/Request.php',
        'App\\Helpers\\Response' => __DIR__ . '/../..' . '/app/Helpers/Response.php',
        'App\\Helpers\\Router' => __DIR__ . '/../..' . '/app/Helpers/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f4b434f37d1c0f4a1ab2cdff6f8dbfe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f4b434f37d1c0f4a1ab2cdff6f8dbfe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f4b434f37d1c0f4a1ab2cdff6f8dbfe::$classMap;

        }, null, ClassLoader::class);
    }
}
