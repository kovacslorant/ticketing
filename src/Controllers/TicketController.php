<?php

namespace Smith\Ticketing\Controllers;

use Smith\Ticketing\Models\Ticket;

class TicketController
{
    public function index()
    {
        $tickets = Ticket::all();
        include __DIR__ . '/../Views/tickets/index.php';
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
            $userId = 1;


            Ticket::create($subject, $message, $userId);
            header('Location: /tickets');
            exit;
        }

         include __DIR__ . '/../Views/tickets/create.php';
    }
}

?>