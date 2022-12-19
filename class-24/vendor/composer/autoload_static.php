<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7380ffe05bb4c4879b5eaae68b9ebf8f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7380ffe05bb4c4879b5eaae68b9ebf8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7380ffe05bb4c4879b5eaae68b9ebf8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7380ffe05bb4c4879b5eaae68b9ebf8f::$classMap;

        }, null, ClassLoader::class);
    }
}