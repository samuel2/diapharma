
<footer class="site-footer">


    <nav class="site-nav">

        <?php
        $args = array(
            'theme_location' => 'footer'
        );
        ?>
        <?php wp_nav_menu($args); ?>

    </nav>

    <div id="copyright">
        <p>Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>
            <span>
                <a href="#">
                    Admin
                </a>
                | Creation : 
                <a title="Developpeur Java, Php, HTML5 et CSS3" target="_blank" href="www.samypro.com">
                    Samuel Kamdoum Folong
                </a>
            </span>
        </p>
    </div>
</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>
