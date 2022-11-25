<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit914942eb63a3b2b6fe068eb2b363a597
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Requirements_Check' => __DIR__ . '/..' . '/wearerequired/wp-requirements-check/WP_Requirements_Check.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit914942eb63a3b2b6fe068eb2b363a597::$classMap;

        }, null, ClassLoader::class);
    }
}
