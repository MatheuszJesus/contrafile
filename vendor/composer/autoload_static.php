<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ee2c50eac9bfb4cd9d58e9e5ad95541
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Contrafile\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Contrafile\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ee2c50eac9bfb4cd9d58e9e5ad95541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ee2c50eac9bfb4cd9d58e9e5ad95541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9ee2c50eac9bfb4cd9d58e9e5ad95541::$classMap;

        }, null, ClassLoader::class);
    }
}
