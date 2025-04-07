<?php get_header(); ?>
<main>
  <div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div><?php the_content(); ?></div>
        </article>
      <?php endwhile;
    else: ?>
      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'thriveguitar'); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>