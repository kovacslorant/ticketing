<h1>Beérkezett jegyek</h1>
<a href="/tickets/create">Új jegy létrehozása</a>
<ul>
    <?php foreach ($tickets as $ticket): ?>
        <li><strong><?= htmlspecialchars($ticket['subject']) ?></strong> - <?= htmlspecialchars($ticket['created_at']) ?></li>
        <?php endforeach; ?>
        
</ul>