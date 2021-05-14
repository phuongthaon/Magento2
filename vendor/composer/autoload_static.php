<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite25462cf44559a8571307e55c0f981eb
{
    public static $files = array (
        '7d52322d2e8bca72fcbbbefd89ff118d' => __DIR__ . '/..' . '/ecomteck/module-core/registration.php',
        '8e8489649e05e8adc109a7a6b4371b36' => __DIR__ . '/..' . '/ecomteck/module-onepay-payment-gateway/registration.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecomteck\\OnePay\\' => 16,
            'Ecomteck\\Core\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecomteck\\OnePay\\' => 
        array (
            0 => __DIR__ . '/..' . '/ecomteck/module-onepay-payment-gateway',
        ),
        'Ecomteck\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/ecomteck/module-core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite25462cf44559a8571307e55c0f981eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite25462cf44559a8571307e55c0f981eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite25462cf44559a8571307e55c0f981eb::$classMap;

        }, null, ClassLoader::class);
    }
}
