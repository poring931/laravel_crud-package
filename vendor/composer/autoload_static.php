<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0c91c038d68371f63f06b30c56a2eaf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaximGmo\\Posts\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaximGmo\\Posts\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0c91c038d68371f63f06b30c56a2eaf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0c91c038d68371f63f06b30c56a2eaf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0c91c038d68371f63f06b30c56a2eaf::$classMap;

        }, null, ClassLoader::class);
    }
}