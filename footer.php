<?php if(has_nav_menu('footer_navigation')): ?>
<footer class="bg-dark text-white p-5 mt-5 barColour">
    <div class="container">
        <div class="row">
        <?php
        wp_nav_menu( array( 'theme_location' => 'footer_navigation',
                            'container' => '',
                            'menu_class' => 'footerNav'
                        ));
        ?>
        </div>
        <p class="text-center">
        
            <?php echo get_theme_mod('1902Custom_theme_copyright'); ?>
        </p>
    </div>

</footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
