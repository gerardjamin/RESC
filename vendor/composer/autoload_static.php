<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8ac9345ee1e2f953ac6eb7172daea10
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8ac9345ee1e2f953ac6eb7172daea10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8ac9345ee1e2f953ac6eb7172daea10::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb8ac9345ee1e2f953ac6eb7172daea10::$classMap;

        }, null, ClassLoader::class);
    }
}