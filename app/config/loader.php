<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->viewsDir
    ]
)->registerNamespaces(
    [
        "App\\Library"     => $config->application->libraryDir,
    ]
)->registerFiles(
    [
        BASE_PATH . '/vendor/autoload.php'
    ]
)->register();
