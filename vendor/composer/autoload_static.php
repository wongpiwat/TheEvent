<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f9847aa6786b2fc65db3913f7fc76c1
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KittichaiGarden\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KittichaiGarden\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f9847aa6786b2fc65db3913f7fc76c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f9847aa6786b2fc65db3913f7fc76c1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
