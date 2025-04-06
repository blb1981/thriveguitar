<?php get_header(); ?>
<main>
  <div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>
          <?php comments_template(); ?>
        </article>
    <?php endwhile;
    endif; ?>
  </div>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>