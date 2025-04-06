<?php get_header(); ?>
<main>
  <div>
    <h2><?php the_archive_title(); ?></h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div><?php the_excerpt(); ?></div>
        </article>
      <?php endwhile;
    else: ?>
      <p><?php esc_html_e('No posts found.', 'thriveguitar'); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>