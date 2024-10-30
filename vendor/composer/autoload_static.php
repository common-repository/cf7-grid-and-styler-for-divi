<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9964c99da831bedc34c2e0feb1be6ac
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPTools\\Psr\\Container\\' => 22,
            'WPTools\\Pimple\\' => 15,
            'WPT\\Cf7Divi\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPTools\\Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpt00ls/container/src',
        ),
        'WPTools\\Pimple\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpt00ls/pimple/src/Pimple',
        ),
        'WPT\\Cf7Divi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9964c99da831bedc34c2e0feb1be6ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9964c99da831bedc34c2e0feb1be6ac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita9964c99da831bedc34c2e0feb1be6ac::$classMap;

        }, null, ClassLoader::class);
    }
}
