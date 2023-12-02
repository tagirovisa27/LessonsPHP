<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0e77d0969bfc995b7a96f3846761dca
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Isa\\PhpLesson\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Isa\\PhpLesson\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0e77d0969bfc995b7a96f3846761dca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0e77d0969bfc995b7a96f3846761dca::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0e77d0969bfc995b7a96f3846761dca::$classMap;

        }, null, ClassLoader::class);
    }
}
