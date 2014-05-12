<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb27f04af3ba3e23fb873482e416e6c8e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb27f04af3ba3e23fb873482e416e6c8e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitb27f04af3ba3e23fb873482e416e6c8e', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname(dirname(dirname(dirname($vendorDir))));

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
            composerRequireb27f04af3ba3e23fb873482e416e6c8e($file);
        }

        return $loader;
    }
}

function composerRequireb27f04af3ba3e23fb873482e416e6c8e($file)
{
    require $file;
}