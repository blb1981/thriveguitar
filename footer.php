<footer>
  <section>
    <?php if (is_active_sidebar('footer-1')) : dynamic_sidebar('footer-1');
    endif; ?>
  </section>
  <section>
    <?php if (is_active_sidebar('footer-2')) : dynamic_sidebar('footer-2');
    endif; ?>
  </section>
  <section>
    <?php if (is_active_sidebar('footer-3')) : dynamic_sidebar('footer-3');
    endif; ?>
  </section>
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>