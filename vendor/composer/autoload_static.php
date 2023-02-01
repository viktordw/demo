<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f082ae51ccfe3d0319e834c75d7b9f0
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GetOpt\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GetOpt\\' => 
        array (
            0 => __DIR__ . '/..' . '/ulrichsg/getopt-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f082ae51ccfe3d0319e834c75d7b9f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f082ae51ccfe3d0319e834c75d7b9f0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f082ae51ccfe3d0319e834c75d7b9f0::$classMap;

        }, null, ClassLoader::class);
    }
}
