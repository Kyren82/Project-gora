<?php get_header(); ?>
<div class="contacts-bg">
    <div class="contacts-panel">
        <div class="contacts-form-panel">
            <h2 class="contacts-success-title">Dziękujemy <?php echo(sanitize_text_field($_POST["contacts-name"])); ?> za skontaktowanie się z nami!</h2>
            <p class="contacts-success-description">Wiadomość zwrotną wyślemy na podanego maila: <?php echo(sanitize_email($_POST["contacts-email"])); ?></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>