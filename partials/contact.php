  <section class="contact" id="contatti">
        <div class="section-header contact-header fade-in-section">
            <h2 class="section-title">Contattami</h2>
        </div>

        <form action="actions/contact_action.php" method="post" class="contact-form fade-in-section">
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
