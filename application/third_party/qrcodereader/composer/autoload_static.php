<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb0afeff85431bb12bf903b6eb64dc0e
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Libern\\QRCodeReader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Libern\\QRCodeReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/libern/qr-code-reader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb0afeff85431bb12bf903b6eb64dc0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb0afeff85431bb12bf903b6eb64dc0e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
