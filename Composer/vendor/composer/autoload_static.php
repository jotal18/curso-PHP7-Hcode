<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64a0a5fa3847d1bf3f32b5cf615607df
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit64a0a5fa3847d1bf3f32b5cf615607df::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}