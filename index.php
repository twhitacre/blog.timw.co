<?php get_header(); ?>

  <section id="intro">
    <p>Below you'll find some of my thoughts.</p>
    <p>Find more about me on <a href="http://timw.co">my personal site.</a></p>
  </section>

  <section id="content">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article>
          <h2 class="post-title-list"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          <span class="date"><?php the_time('F j, Y') ?></span>
          <div class="post-content">
            <?php custom_excerpt(); ?>
            <a class="readmore" href="<?php the_permalink() ?>">read more...</a>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>

    <div class="pagination">
      <?php next_posts_link('<span class="typcn typcn-arrow-left-thick"></span>') ?>
      <?php previous_posts_link('<span class="typcn typcn-arrow-right-thick next"></span>') ?>
    </div>

  </section>

<?php get_footer(); ?>