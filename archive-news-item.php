<?php get_header(); ?>
<?php
  function get_image_sizes_and_widths() {
    $image_size_array = get_intermediate_image_sizes();
    $image_sizes_and_widths = [];
    foreach ($image_size_array as $image_size) {
      $single_width_and_size = [
        'name' => 'medium',
        'width' => 500,
      ];
      $image_sizes_and_widths[] = $single_width_and_size;
    }
    return $image_sizes_and_widths;
  }
?>
<div id="fixed-layout-content-area">
  <div class="scrollable">
    <div class="news-archive">
      <h1>NEWS</h1>
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : ?>
          <?php the_post(); ?>
          <?php
            //Get data for each news item
            $link = htmlentities( get_field('link') );
            $description = htmlentities( get_field('description') );
            $date_field = get_field('date');
            $date = DateTime::createFromFormat('Ymd', $date_field);
            $formatted_date = $date->format('F j, Y');
            $featured_image_id = get_post_thumbnail_id();
            $image_src_array_medium = wp_get_attachment_image_src($featured_image_id, 'medium');
            $image_src_array_medium_large = wp_get_attachment_image_src($featured_image_id, 'medium_large');
          ?>

          <a href="<?= $link ?>" class="news-archive__link">
            <article class="news-archive__news-item">
              <div class="news-archive__title-and-date">
                <h2 class="news-archive__title"><?php htmlentities( the_title() ); ?></h2>
                <p class="news-archive__date"><?= $formatted_date ?></p>
              </div>
              <picture class="news-archive__picture">
                <source media="(min-width: 600px)" srcset="<?php echo $image_src_array_medium_large[0]; ?>">
                <img src="<?php echo $image_src_array_medium[0]; ?>" alt="News Item Featured Image" class="news-archive__image">
              </picture>
              <p class="news-archive__description"><?= $description ?></p>
            </article>
          </a>

        <?php endwhile; ?>
      <?php else : ?>
        <h1>There are currently no news items to display!</h1>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
