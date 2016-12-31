<?php get_header(); ?>

<div id="fixed-layout-content-area">
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
          $ftd_image_id = get_post_thumbnail_id();
          $image_size_array = get_intermediate_image_sizes();

        ?>

        <article class="news-archive__news-item">
          <a href="<?= $link ?>" class="news-archive__link">
            <h2 class="news-archive__title"><?php htmlentities( the_title() ); ?></h2>
          </a>
          <p class="news-archive__date"><?= $formatted_date ?></p>
          <img src="" alt="" class="news-item__image">
          <p class="news-archive__description"><?= $description ?></p>
        </article>

      <?php endwhile; ?>
    <?php else : ?>
      <h1>There are currently no news items to display!</h1>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
