<?php
// 1. Sicurezza: Avvio della sessione
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Impostazioni del Sito (Costanti)
// Usare le costanti (define) è meglio delle variabili perché non possono essere cambiate per errore
define('SITE_NAME', 'Ethan del biaggio');
define('SITE_EMAIL', 'info@miosito.ch');
define('BASE_URL', ''); // Utile per i link assoluti

// 3. Configurazione Database (per quando lo attiverai)
define('DB_HOST', 'localhost');
define('DB_NAME', 'nome_database');
define('DB_USER', 'root');
define('DB_PASS', '');

// 4. Inclusione automatica del Database (se il file esiste)
if (file_exists('DataBase/db.php')) {
    require_once 'DataBase/db.php';
}

// 5. Funzioni di utilità (Cybersecurity)
// Creiamo subito una funzione per pulire i dati (evita attacchi XSS)
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}