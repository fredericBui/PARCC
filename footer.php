</main>
<footer class="site__footer">
    <div>
        <button>
            <img src="<?php echo get_template_directory_uri(); ?>/footer1.png" alt="">
        </button>
        <button>
            <img src="<?php echo get_template_directory_uri(); ?>/footer2.png" alt="">
        </button>
        <button>
            <img src="<?php echo get_template_directory_uri(); ?>/footer3.png" alt="">
        </button>
    </div>
    <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>