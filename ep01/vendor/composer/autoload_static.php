<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2403ac8f651bfb6a40e59c1f8fb3dc1f
{
    public static $files = array (
        '254401079e4ee4ee29920695686fd4df' => __DIR__ . '/../..' . '/source/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2403ac8f651bfb6a40e59c1f8fb3dc1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2403ac8f651bfb6a40e59c1f8fb3dc1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2403ac8f651bfb6a40e59c1f8fb3dc1f::$classMap;

        }, null, ClassLoader::class);
    }
}
