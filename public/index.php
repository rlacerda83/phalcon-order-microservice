<?php

use Phalcon\Loader;
use Phalcon\Mvc\Micro;
use Phalcon\Di\FactoryDefault;
use Phalcon\Db\Adapter\Pdo\Mysql as PdoMysql;

// Use Loader() to autoload our model
$loader = new Loader();

// Register some namespaces
$loader->registerNamespaces(
    array(
        "Models"    => __DIR__ . '/../app/models',
    )
);

$loader->register();

$di = new FactoryDefault();

// Set up the database service
$di->set('db', function () {
    return new PdoMysql(
        array(
            "host"     => "localhost",
            "username" => "root",
            "password" => "123mudar",
            "dbname"   => "ecommerce_order"
        )
    );
});

// Create and bind the DI to the application
$app = new Micro($di);

// Retrieves all orders
$app->get('/api/orders', function () {
    $order = new \Models\Order();
    $orderItem = new \Models\Order\Items();

    die('orders');
});

$app->handle();