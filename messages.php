<?php
require_once("config/config.php");
require_once("DataBase/db.php");

include("includes/header.php");
include("includes/menu.php");

// ⚠️ CORREZIONE: Ho aggiunto 'messaggio' alla SELECT. 
// (Assicurati che il nome della colonna nel tuo DB sia corretto!)
$messages = $conn->query("SELECT nome, email, messaggio FROM messaggi");
?>

<div class="dashboard-container">
    <h2 class="header">Messaggi Ricevuti</h2>

    <?php if ($messages->rowCount() > 0): ?>
        <?php while ($row = $messages->fetch()): ?>
            <div class="message-card" onclick="toggleMessage(this)">
                <div class="message-header">
                    <div class="message-info">
                        <strong><?= htmlspecialchars($row['nome']); ?></strong>
                        <span><?= htmlspecialchars($row['email']); ?></span>
                    </div>
                    <div class="toggle-icon">+</div>
                </div>
                
                <div class="message-body">
                    <div class="message-body-inner">
                        <div class="message-text">
                            <?= nl2br(htmlspecialchars($row['messaggio'])); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Nessun messaggio ricevuto al momento.</p>
    <?php endif; ?>

</div>

<script>
    // Semplice funzione JavaScript per aprire/chiudere la scheda
    function toggleMessage(cardElement) {
        // Aggiunge o toglie la classe 'expanded' alla card cliccata
        cardElement.classList.toggle('expanded');
    }
</script>
<?php
include("includes/footer.php");
?>