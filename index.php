<?php
require_once "config/config.php";

$PageTitle = "Sito esempio";

include("includes/header.php");
include("includes/menu.php");
?>

    <section class="hero">
        <div class="hero-content" id="hero">
            <h1 class="hero-title">Ethan Del Biaggio</h1>
            <p class="hero-subtitle">Sviluppo web artigianale: codice puro, performance elevate e soluzioni su misura.</p>
            <a href="#about" class="btn-primary hero-btn">Scopri di più su di me</a>
        </div>
    </section>

    <section class="features" id="servizi">
        <div class="section-header features-header fade-in-section">
            <h2 class="section-title">I miei servizi</h2>
            <h3 class="section-subtitle">Dalla progettazione di piattaforme ex-novo alla modernizzazione di sistemi esistenti, offro uno sviluppo web artigianale.</h3>
        </div>

        <div class="features-grid">
            <article class="feature-card fade-in-section">
                <img src="assets/img/service1.jpg" alt="Codice HTML" class="services-image">
                <div class="feature-content">
                    <h3 class="feature-title">Creazione di siti personalizzati da zero</h3>
                    <p class="feature-desc">Realizzo soluzioni web partendo da un foglio bianco, scrivendo codice pulito in HTML, CSS e PHP. A differenza dei siti "preconfezionati", un progetto su misura garantisce prestazioni fulminee, una sicurezza superiore e un’interfaccia cucita esattamente sulle tue necessità.</p>
                </div>
            </article>
            <article class="feature-card fade-in-section">
                <img src="assets/img/service2.jpg" alt="Codice HTML" class="services-image">
                <div class="feature-content">
                    <h3 class="feature-title">Modernizzazione di siti esistenti</h3>
                    <p class="feature-desc">Hai già un sito ma senti che è diventato lento, datato o difficile da gestire? Mi occupo di rimodernizzare l'estetica e potenziare le funzionalità del tuo spazio digitale attuale, trasformandolo in uno strumento moderno e ottimizzato.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="about-me" id="about">
        <div class="section-header fade-in-section">
            <h2 class="section-title">Chi sono</h2>
        </div>
        
        <div class="about-content fade-in-section" >
            <p class="feature-desc" >
               Il mio interesse per l'informatica è iniziato molto presto, ma è durante gli studi al Liceo di Bellinzona che ho deciso di trasformare questa passione in una competenza concreta. Oltre al percorso scolastico ordinario, ho scelto di approfondire il mondo dello sviluppo web e della Cybersecurity, frequentando corsi specialistici per imparare non solo a "costruire" il web, ma a renderlo sicuro. Questo mix di studi classici e formazione tecnica mi permette di avere un approccio analitico e critico in ogni progetto: non mi limito a far funzionare il codice, cerco di capire la logica profonda che c'è dietro ogni sistema.
            </p>
            <p class="feature-desc">
                Nella pratica, mi occupo di sviluppo Full-Stack focalizzato sulle prestazioni. Ho imparato a padroneggiare i linguaggi fondamentali del web, come HTML5 e CSS3, per creare interfacce moderne e responsive che si adattano a ogni dispositivo. Lato backend, utilizzo PHP e database SQL per gestire la logica del sito e la sicurezza dei dati. Il mio metodo di lavoro si basa sull'uso di strumenti professionali come VS Code, Git e ambienti di test locali, garantendo che ogni riga di codice sia scritta su misura, evitando i limiti dei comuni costruttori di siti automatici.
            </p>
            <p class="feature-desc">
               Parallelamente allo sviluppo, ho applicato le mie conoscenze di sicurezza informatica per proteggere i progetti che realizzo. So come implementare difese contro le vulnerabilità più comuni, come la SQL Injection e gli attacchi XSS, utilizzando tecniche moderne di sanitizzazione dei dati e hashing delle password. Ho già lavorato alla rimodernizzazione di siti esistenti, passando da semplici pagine statiche a piattaforme dinamiche dotate di aree amministrative protette. Questo mi permette di offrire soluzioni complete: dalla progettazione grafica iniziale fino alla messa in sicurezza definitiva del server.
            </p>
        </div>
    </section>

    <section class="contact" id="contatti">
        <div class="section-header contact-header fade-in-section">
            <h2 class="section-title">Contattaci</h2>
        </div>

        <form action="#" method="post" class="contact-form fade-in-section">
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

<?php
include("includes/footer.php");
?>