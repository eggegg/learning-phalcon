<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit853197b4fbafe82a5d4d01461c51fe73
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phalcon\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phalcon\\' => 
        array (
            0 => __DIR__ . '/..' . '/phalcon/incubator/Library/Phalcon',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit853197b4fbafe82a5d4d01461c51fe73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit853197b4fbafe82a5d4d01461c51fe73::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
