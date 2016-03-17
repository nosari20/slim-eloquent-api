<?php
// Autoload our dependencies with Composer
require '../vendor/autoload.php';

// Database information
$settings = array(
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'ulcodein24',
    'username' => 'admin',
    'password' => '',
    'collation' => 'utf8_general_ci',
    'prefix' => ''
);

// Bootstrap Eloquent ORM
$container = new Illuminate\Container\Container;
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);

// Create Slim app
$app = new Slim\App();











$app->get('/', function () {
   
   var_dump($_GET);
   $dip=App\Model\Diplomes::all();
   foreach ($_GET as $key => $value) {
       # code...
   }
    echo "API";
    //echo $book->toJson();
});

$app->run();