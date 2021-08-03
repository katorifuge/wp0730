<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
  <main>
    <div class="firstview">
      <div class="firstview__content category_firstview-content">
        <p class="common__sub-ttl category__common-sub-ttl">NEWS</p>
      </div>
      <div class="firstview__eyecatch category_firstview-eyecatch-blog"><img src="<?php echo get_template_directory_uri(); ?>/img/archive-news__first.png" alt="">
      </div>
    </div>

    <div id="news" class="small-container">
      <div class="single-news__list-container">
        <li>
          <a class="single-news__list" href="">
            <p class="single-news__list-detail"><?php the_title(); ?></p>
            <p class="single-news__list-data"><?php echo get_the_date('Y-m-d') ?></p>
            <p class="single-news__list-text"><?php the_content(); ?></p>
          </a>
        </li>
      </div>
    </div>
  <?php endif; ?>



  <div id="contact">
    <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
    <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
  </div>
  </main>
  <?php get_footer(); ?>