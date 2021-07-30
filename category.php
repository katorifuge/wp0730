<?php get_header(); ?>

<main>
  <div class="firstview">
    <div class="firstview__content category_firstview__content">
      <p class="common__sub-ttl category_common__sub-ttl"><?php single_cat_title(); ?></p>
      <p class="common__ttl  category_common__ttl">カテゴリー一覧</p>
    </div>
    <div class="firstview__eyecatch category_firstview__eyecatch-blog"><img src="<?php echo get_template_directory_uri(); ?>/img/firstview_blog1.png" alt=""></div>
  </div>

  <div class="category_blog">
    <div class="category_blog-container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="category_blog-item flex__item">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>

              <div class="category_blog-item-content">
                <h3 class="category_blog_ttl">
                  <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </h3>
                <p class="category_blog_txt">
                  <?php
                  if (mb_strlen($post->post_, 'UTF-8') > 30) {
                    $content = mb_substr($post->post_content, 0, 30, 'UTF-8');
                    echo $content . '…';
                  } else {
                    echo $post->post_content;
                  }
                  ?>
                </p>
                <ul class="flex__item">
                  <li class="category_blog-wrap__item-content-tag"><?php echo get_the_date('Y-m-d'); ?>
                  </li>
                  <li class="category_blog-wrap__item-content-tag">
                    <?php $posttags = get_the_tags();
                    if ($posttags) {
                      foreach ($posttags as $tag) {
                        echo '<span class="tag-span">' . $tag->name . '</span>';
                      }
                    } ?>
                  </li>
                </ul>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
      <?php else : ?>
        <p>投稿が見つかりません。</p>
      <?php endif; ?>
      <?php
      $args = array(
        'mid_size' => 1,
        'prev_text' => '&lt;&lt;back',
        'next_text' => 'next&gt;&gt;',
        'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>

    </div>

    <div id="contact">
      <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
      <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
    </div>
</main>
<?php get_footer(); ?>