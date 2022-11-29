<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce253287f2b6072bc91056d361a21ed0
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce253287f2b6072bc91056d361a21ed0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce253287f2b6072bc91056d361a21ed0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce253287f2b6072bc91056d361a21ed0::$classMap;

        }, null, ClassLoader::class);
    }
}
