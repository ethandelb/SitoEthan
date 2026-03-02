<?php
require_once "config/config.php";

$PageTitle = "Sito esempio";

include("includes/header.php");

?>
  class="container">

        <!-- HERO SECTION -->
        <section class="hero">
            <div class="hero-content">
                <h1 class="hero-title">Ethan Del Biaggio</h1>
                <p class="hero-subtitle">Sviluppo web artigianale: codice puro, performance elevate e soluzioni su misura.</p>
                <a href="#" class="btn-primary hero-btn">Scopri di più su di me</a>
            </div>
        </section>

        <!-- SEZIONE FEATURES -->
        <section class="features">
            <div class="section-header features-header">
                <h2 class="section-title">I miei servizi</h2>
                <h3 class="section-subtitle">Dalla progettazione di piattaforme ex-novo alla modernizzazione di sistemi esistenti, offro uno sviluppo web artigianale che mette al centro la velocità, la sicurezza e la facilità di gestione.</h3>
            </div>

            <div class="features-grid">
                <article class="feature-card">
                     <img src="assets/img/service1.jpg" alt="Image of lines of code" class="services-image">
                    <div class="feature-content">
                    <h3 class="feature-title">Creazione di siti personalizzati da zero</h3>
                    <p class="feature-desc">Realizzo soluzioni web partendo da un foglio bianco, scrivendo codice pulito in HTML, CSS e PHP. A differenza dei siti "preconfezionati", un progetto su misura garantisce prestazioni fulminee, una sicurezza superiore e un’interfaccia cucita esattamente sulle tue necessità. Che tu abbia bisogno di una landing page d'impatto o di una piattaforma gestionale complessa, costruisco un'architettura solida e scalabile, pronta a crescere insieme al tuo business.</p>
                    </div>
                </article>
                <article class="feature-card">
                    <h3 class="feature-title">Servizio 1</h3>
                    <p class="feature-desc">Hai già un sito ma senti che è diventato lento, datato o difficile da gestire? Mi occupo di rimodernizzare l'estetica e potenziare le funzionalità del tuo spazio digitale attuale. Dalla migrazione verso database più efficienti all'aggiunta di nuove feature personalizzate (come aree riservate, sistemi di prenotazione o pannelli admin), trasformo un sito obsoleto in uno strumento moderno, sicuro e perfettamente ottimizzato per ogni dispositivo.</p>
                </article>
            </div>
        </section>

        <!-- SEZIONE CONTENUTO DINAMICO -->
        <section class="content">
            <div class="section-header content-header">
                <h2 class="section-title">Ultimi aggiornamenti</h2>
            </div>

            <div class="content-wrapper">
                <div class="content-item">
                    <h3 class="content-title">Titolo articolo</h3>
                    <p class="content-desc">Estratto del contenuto...</p>
                    <a href="#" class="btn-secondary content-btn">Leggi tutto</a>
                </div>
            </div>
        </section>

        <!-- SEZIONE CONTATTO -->
        <section class="contact">
            <div class="section-header contact-header">
                <h2 class="section-title">Contattaci</h2>
            </div>

            <form action="#" method="post" class="contact-form">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="message">Messaggio</label>
                    <textarea id="message" name="message" class="form-input" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn-primary contact-btn">Invia</button>
            </form>
        </section>

    </div>

<?php
include("includes/footer.php");
?>