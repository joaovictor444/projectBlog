<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7db100e288131792d7dfacf3f690389a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7db100e288131792d7dfacf3f690389a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7db100e288131792d7dfacf3f690389a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7db100e288131792d7dfacf3f690389a::$classMap;

        }, null, ClassLoader::class);
    }
}
