<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit14abd9a1626c51cb6b9be6e529015526
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit14abd9a1626c51cb6b9be6e529015526', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit14abd9a1626c51cb6b9be6e529015526', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit14abd9a1626c51cb6b9be6e529015526::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
