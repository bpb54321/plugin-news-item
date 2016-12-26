<?php get_header(); ?>

<div id="fixed-layout-content-area">
  <div class="news-archive">
    <h1>NEWS</h1>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
        <?php
          //Get data for each news item
          $link = get_field('link');
          $description = get_field('description');
          $date = get_field('date');
        ?>

        <article class="news-archive__news-item">
          <a href="<?= $link ?>" class="news-item__link">
            <h2 class="news-archive__title"><?php the_title(); ?></h2>
          </a>
          <p class="news-archive__date"><?= $date ?></p>
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
