<?php get_header(); ?>

<main>
  <div class="firstview">
    <div class="firstview__content category__firstview-content">
      <p class="common__sub-ttl category__common-sub-ttl"><?php single_cat_title(); ?></p>
      <p class="common__ttl  category__common-ttl">カテゴリー一覧</p>
    </div>
    <div class="firstview__eyecatch category__firstview-eyecatch-blog"><img src="<?php echo get_template_directory_uri(); ?>/img/firstview_blog1.png" alt=""></div>
  </div>

  <div class="category__blog">
    <div class="category__blog-container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="category__blog-item flex__item">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
              <?php endif; ?>

              <div class="category__blog-item-content">
                <h1 class="category__blog_ttl">
                  <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                    $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </h1>
                <p class="category__blog_txt">
                  <?php
                  if (mb_strlen($post->post_content, 'UTF-8') > 70) {
                    $content = mb_substr(strip_tags($post->post_content), 0, 70, 'UTF-8');
                    echo $content . '…';
                  } else {
                    echo strip_tags($post->post_content);
                  }
                  ?>
                </p>
                <ul class="flex__item">
                  <li class="category__blog-wrap__item-content-tag"><?php echo get_the_date('Y-m-d'); ?>
                  </li>
                  <li class="category__blog-wrap__item-content-tag">
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