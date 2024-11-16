<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f0a951d7acf12e9b38ceadcd0ccf16e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f0a951d7acf12e9b38ceadcd0ccf16e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f0a951d7acf12e9b38ceadcd0ccf16e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f0a951d7acf12e9b38ceadcd0ccf16e::$classMap;

        }, null, ClassLoader::class);
    }
}