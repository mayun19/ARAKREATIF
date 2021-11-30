<?php
          $args = array(
          'post_type' => 'post' ,
          'orderby' => 'date' ,
          'order' => 'DESC' ,
          // 'posts_per_page' => 6,
          'category_name'         => 'our-services',
          'paged' => get_query_var('paged'),
          'post_parent' => $parent
        ); 
        $q = new WP_Query($args);
      ?>

<?php get_header(); ?>
  <div class="row" id="services">
    <div class="col blog-main">
    <h3 class="services">
      <?php echo get_theme_mod('services_heading', 'What Do We Offer'); ?>
    </h3>
    <br>
      <div class="row">
        <?php if( $q->have_posts()) : ?>
          <?php while( $q->have_posts()) : $q->the_post(); ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                    <?php get_template_part('content'); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Post Found') ?></p>
        <?php endif; ?> 
      </div>
    </div>
  </div>
<?php get_footer(); ?>