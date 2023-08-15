<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70a559d78ad17e6e00181c2171023eac
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70a559d78ad17e6e00181c2171023eac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70a559d78ad17e6e00181c2171023eac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70a559d78ad17e6e00181c2171023eac::$classMap;

        }, null, ClassLoader::class);
    }
}
