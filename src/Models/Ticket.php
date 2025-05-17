<?php

namespace Smith\Ticketing\Models;

use Smith\Ticketing\Core\Database;
use PDO;

class Ticket
{

    public static function all(): array
    {
        $db = Database::getConnection();
        $stmt = $db ->query("SELECT * FROM tickets ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }

    public static Function create(string $subject, string $message, int $userId): bool 
    {
        $db = Database::getConnection();
        $stmt = $db->prepare("INSERT INTO tickets (subject, message, user_id) VALUES (?, ?, ?)");
        return $stmt->execute([$subject, $message, $userId]);
        
    }
}

?>