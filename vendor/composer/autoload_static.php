<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit699f9faa86e8c8ea4663e7b5d07191f4
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Ufee\\Sqlite3\\' => 13,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ufee\\Sqlite3\\' => 
        array (
            0 => __DIR__ . '/..' . '/ufee/sqlite3/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit699f9faa86e8c8ea4663e7b5d07191f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit699f9faa86e8c8ea4663e7b5d07191f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit699f9faa86e8c8ea4663e7b5d07191f4::$classMap;

        }, null, ClassLoader::class);
    }
}
