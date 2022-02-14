<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a83f47ed50f331562714971f349eded
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a83f47ed50f331562714971f349eded::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a83f47ed50f331562714971f349eded::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a83f47ed50f331562714971f349eded::$classMap;

        }, null, ClassLoader::class);
    }
}