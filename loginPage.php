<?php
require_once "config/config.php";
include("includes/header.php");
include("includes/menu.php");

?>
  <section class="contact" >
        <div class="section-header contact-header fade-in-section">
            <h2 class="section-title">Login Area riservata</h2>
        </div>

        <form action="admin/login_act.php" method="post" class="contact-form fade-in-section">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-input" required>
            </div>
            <button type="submit" class="btn-primary contact-btn">Invia</button>
        </form>
    </section>
<?php
include("includes/footer.php")

?>