<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6cd20c98e6d7d2bb9c5dde51b41bbce
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zulhamfendhy\\Adminlte\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zulhamfendhy\\Adminlte\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6cd20c98e6d7d2bb9c5dde51b41bbce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6cd20c98e6d7d2bb9c5dde51b41bbce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6cd20c98e6d7d2bb9c5dde51b41bbce::$classMap;

        }, null, ClassLoader::class);
    }
}
