<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4c198c83feb2300690308bd1fa6c527
{
    public static $files = array (
        '139f208915fdab23edc5dab81f6bc802' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf4c198c83feb2300690308bd1fa6c527::$classMap;

        }, null, ClassLoader::class);
    }
}
