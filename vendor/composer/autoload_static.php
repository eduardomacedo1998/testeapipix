<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita373087962660eab6629dc61f7d4d0da
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita373087962660eab6629dc61f7d4d0da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita373087962660eab6629dc61f7d4d0da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita373087962660eab6629dc61f7d4d0da::$classMap;

        }, null, ClassLoader::class);
    }
}
