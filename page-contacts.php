<?php get_header(); ?>
<div class="contacts-bg">
    <div class="contacts-panel">
        <div class="contacts-form-panel">
            <form action="<?php echo esc_url(home_url('/contacts-success')); ?>" method="POST" class="contacts-form">
                <h2 class="contacts-form-title">Formularz Kontaktowy</h2>

                <label for="contacts-name" id="contacts-name-label">Podaj swoje imie:</label>
                <input type="text" id="contacts-name" name="contacts-name" autocomplete="off" placeholder="<?php echo esc_attr(get_field('contacts-form-name', 'option')); ?>"> 

                <label for="contacts-email" id="contacts-email-label">Podaj swój email:</label>
                <input type="email" id="contacts-email" name="contacts-email" placeholder="<?php echo esc_attr(get_field('contacts-form-email', 'option')); ?>">
                
                <div class="contacts-form-line"></div>
                
                <textarea name="contacts-description" id="contacts-description" autocomplete="off" placeholder="<?php echo esc_attr(get_field('contacts-form-description', 'option')); ?>"></textarea>
                <input type="submit" value="Wyślij" id="contacts-form-submit">
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>