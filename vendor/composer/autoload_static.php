<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit06c59558ec4af203155d01120b9367a1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit06c59558ec4af203155d01120b9367a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit06c59558ec4af203155d01120b9367a1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit06c59558ec4af203155d01120b9367a1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit06c59558ec4af203155d01120b9367a1::$classMap;

        }, null, ClassLoader::class);
    }
}
