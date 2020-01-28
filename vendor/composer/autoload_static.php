<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4673e6dffbee28580d78c6ff130cf567
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system/classes',
            1 => __DIR__ . '/../..' . '/classes/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4673e6dffbee28580d78c6ff130cf567::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4673e6dffbee28580d78c6ff130cf567::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
