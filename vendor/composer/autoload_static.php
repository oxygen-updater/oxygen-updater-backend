<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit104c269985cf0ba0eab65a8825583b22
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit104c269985cf0ba0eab65a8825583b22::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}