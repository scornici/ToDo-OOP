<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e476f0a03222c2cac11871328d996c6
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iscornici\\ToDoOop\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iscornici\\ToDoOop\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e476f0a03222c2cac11871328d996c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e476f0a03222c2cac11871328d996c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e476f0a03222c2cac11871328d996c6::$classMap;

        }, null, ClassLoader::class);
    }
}
