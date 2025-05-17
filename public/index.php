<?php 

require_once __DIR__ . '/../vendor/autoload.php';


use  Smith\Ticketing\Controllers\TicketController;

$uri = $_SERVER['REQUEST_URI'];

$controller = new TicketController();

if($uri === '/tickets'){
    $controller->index();
} elseif ($uri === '/tickets/create'){
    $controller->create();
} else {
    http_response_code(404);
    echo "404 - Az oldal nem található.";
}

 ?>
