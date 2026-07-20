<footer>
    <?php 
        $footer_description = get_field('footer-description', 'option');
        if (!empty($footer_description)) : ?>
            <p><?php echo esc_html($footer_description); ?></p>
        <?php endif; ?>
</footer>
    <?php wp_footer(); ?>
</body>
</html>