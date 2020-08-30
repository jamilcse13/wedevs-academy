<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a1c0aea8ac37c5e824b33dc7d480746
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WeDevs\\Academy\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WeDevs\\Academy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a1c0aea8ac37c5e824b33dc7d480746::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a1c0aea8ac37c5e824b33dc7d480746::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}