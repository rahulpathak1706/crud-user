<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68ad765058ce4fdf395c9a6b94ec97e3
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rpcrud\\User\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rpcrud\\User\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit68ad765058ce4fdf395c9a6b94ec97e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68ad765058ce4fdf395c9a6b94ec97e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68ad765058ce4fdf395c9a6b94ec97e3::$classMap;

        }, null, ClassLoader::class);
    }
}
