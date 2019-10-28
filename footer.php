<?php if(has_nav_menu('footer_navigation')): ?>
<footer class="bg-dark text-white p-5 mt-5">
    <div class="container">
        <div class="row">
        <?php
        wp_nav_menu( array( 'theme_location' => 'footer_navigation',
                            'container' => '',
                            'menu_class' => 'footerNav'
                        ));
        ?>
        </div>
    </div>
</footer>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
