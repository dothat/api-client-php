<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08a3a084130b5f46687ca94198e954c9
{
    public static $classMap = array (
        'DoThatAPI_Service_Customer' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_Customer' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_CustomerAddress' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_CustomerCollection' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_CustomerContact' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_EmailAddress' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_PhoneNumber' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_Route' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_ServiceArea' => __DIR__ . '/../..' . '/src/Customer.php',
        'DoThatAPI_Service_Customer_ServicedAddress' => __DIR__ . '/../..' . '/src/Customer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit08a3a084130b5f46687ca94198e954c9::$classMap;

        }, null, ClassLoader::class);
    }
}
