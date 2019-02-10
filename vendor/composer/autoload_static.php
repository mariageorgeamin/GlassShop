<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb15fa426b6c361be5a4bd49ad7064d38
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'MySQLHandler' => __DIR__ . '/../..' . '/Model/MySQLHandler.php',
        'RequestHandler' => __DIR__ . '/../..' . '/Model/RequestHandler.php',
        'ResponseHandler' => __DIR__ . '/../..' . '/Model/ResponseHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitb15fa426b6c361be5a4bd49ad7064d38::$classMap;

        }, null, ClassLoader::class);
    }
}
