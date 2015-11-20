<?php get_header(); ?>

<div class="container">
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="col-md-8">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
    
    <div class="col-md-4">
        <?php get_sidebar(); ?>
          <?php get_search_form(); ?>

    </div>
    
</div>
<?php get_footer(); ?>