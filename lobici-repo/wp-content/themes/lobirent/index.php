<?php get_header(); ?>
<section class="section">
  <div class="container archive-grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="card post-card">
        <div class="meta"><?php the_time('d M Y'); ?></div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; else : ?>
      <article class="card post-card">
        <h2>İçerik bulunamadı</h2>
      </article>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
