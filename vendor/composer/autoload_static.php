<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ac52c42b06cf9fd6314d5b82546e9a2
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Deye\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Deye\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ac52c42b06cf9fd6314d5b82546e9a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ac52c42b06cf9fd6314d5b82546e9a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6ac52c42b06cf9fd6314d5b82546e9a2::$classMap;

        }, null, ClassLoader::class);
    }
}
