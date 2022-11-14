<?php get_header() ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div class="jumbotron">
  <h1 class="display-4"><?php the_title(); ?></h1>
  <p class="lead"><?php the_content() ?></p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
  <?php endwhile; else: ?>
    <h1 class="display-1">Aucun article de disponible</h1>
  <?php endif; ?>

<?php get_footer() ?>