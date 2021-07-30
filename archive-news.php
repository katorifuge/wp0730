<?php get_header(); ?>

<main>
  <div class="firstview">
    <div class="firstview__content category_firstview__content">
      <p class="common__sub-ttl category_common__sub-ttl">NEWS</p>
      <p class="common__ttl  category_common__ttl">ニュース記事一覧</p>
    </div>
    <div class="firstview__eyecatch category_firstview__eyecatch-blog"><img src="<?php echo get_template_directory_uri(); ?>/img/archive-news__first.png" alt="">
    </div>
  </div>

  <div id="news" class="small-container">

    <ul class="news__list">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li>
            <a class="news__list-link" href="<?php the_permalink(); ?>">
              <span class="news__list-data"><?php echo get_the_date('Y-m-d'); ?></span>

              <span class="news__list-cat">
                <?php
                $days = 2;
                $today = date_i18n('U');
                $entry_day = get_the_time('U');
                $keika = date('U', ($today - $entry_day)) / 86400;
                if ($days > $keika) :
                  $limit = 2;
                  $num = $wp_query->current_post;
                  if ($limit > $num) :
                    echo '<small class="new"><span class="new_label">New</span></small>';
                  endif;
                endif;
                ?>
              </span>

              <span class="news__list-detail">
                <?php the_title(); ?>
              </span>
            </a>
          </li>
      <?php endwhile;
      endif; ?>

    </ul>
  </div>




  <div id="contact">
    <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
    <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
  </div>
</main>
<?php get_footer(); ?>