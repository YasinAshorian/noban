<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf84c73e1e2a2569f7db56208cc8d539e
{
    public static $files = array (
        'd2792de3518d964658e32b6b35ccc770' => __DIR__ . '/../..' . '/app/Helper/helper.php',
    );

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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf84c73e1e2a2569f7db56208cc8d539e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf84c73e1e2a2569f7db56208cc8d539e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf84c73e1e2a2569f7db56208cc8d539e::$classMap;

        }, null, ClassLoader::class);
    }
}
