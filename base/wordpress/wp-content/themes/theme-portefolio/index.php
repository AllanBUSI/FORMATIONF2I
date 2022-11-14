<?php get_header() ?>

<!-- ADVERTISERS SERVICE CARD -->
<section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
  <div class="container">
    <div class="row">
      <!-- title articles -->
      <div class="section-header">
        <h1 class="fw-bold fs-1">
            Mes
          <span class="b-class-secondary">articles </span> de mon blog
        </h1>
        <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
      </div>
    </div>
    <!-- cards -->
    <div class="row">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <div class="col-md-4 mt-4">
        <div class="service-card">
          <div class="icon-wrapper">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <h3><?php the_title(); ?></h3>
          <p>
            <?php the_content() ?>
          </p>
          <?= get_search_form() ?>
        </div>
      </div>
      <?php endwhile; else: ?>
        <h1 class="display-1">Aucun article de disponible</h1>
        <?php endif; ?>
        <?php
        // je créer un filtres pour récuperer les articles
        $array = [
          // nombre de poste par page 
          'posts_per_page' => 2,
          // trier début ou fin
          'order' => 'DESC'
        ];
        // objetc de recherche
        $the_query = new WP_Query($array); 
        // si notre existe ?
        
        // si l'articles existes

        if ( $the_query->have_posts()) {

          // tant que tu a des résultats 
            
          while ( $the_query->have_posts() ) {
            echo '
            <div class="col-md-4 mt-4">
              <div class="service-card">
                <div class="icon-wrapper">
                  <i class="fa-solid fa-chart-line"></i>
                </div>
            ';
            // tu affiche le post 
            $the_query->the_post();
            echo '<h3>' . get_the_title() . '</h3>';
            echo '</div>
              </div>
            </div>';
          }
        } else {
          // no posts found
        }


        wp_reset_postdata();

      ?>
    </div>

  </div>
</section>
<!-- ADVERTISERS SERVICE CARD ENDED -->

<?php get_footer() ?>