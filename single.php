<?php get_header(); ?>

<div class="single__blog">
  <div class="single__blog-container">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="single__blog-ttl">
          <?php echo get_the_title(); ?>
        </h1>
        <ul class="single__wrap-item">
          <li class="single__blog-date">
            <?php echo get_the_date('Y-m-d'); ?>
          </li>
          <li class="single__blog-tag">
            <?php $posttags = get_the_tags();
            if ($posttags) {
              foreach ($posttags as $tag) {
                echo '<span class="tag-span">' . $tag->name . '</span>';
              }
            } ?>
          </li>
        </ul>

          <div class="single__blog-item">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
            <?php endif; ?>
          </div>

          <div class="single__blog-txt">
            <?php
            if (mb_strlen($post->post_, 'UTF-8') > 30) {
              $content = mb_substr($post->post_content, 0, 30, 'UTF-8');
              echo $content . '…';
            } else {
              echo $post->post_content;
            }
            ?>
          </div>

          <a href="<?php echo get_category_link(2); ?>">
            <?php if (!is_category() && has_category()) : ?>
              <span class="single__blog-cat">
                <?php $postcat = get_the_category();
                echo $postcat[0]->name;
                ?>
              </span>
            <?php endif; ?>
          </a>

  </div>

<?php endwhile; ?>
<?php else : ?>
  <p>投稿が見つかりません。</p>
<?php endif; ?>

</div>

<div class="single__pagenation-container">
  <div class="single__pagenation">
    <p class="single__pagenation-prev">
      <?php next_post_link('%link', '&lt;&lt;  前の記事へ', true); ?>
    </p>
    <p class="single__pagenation-next">
      <?php previous_post_link('%link', '次の記事へ  &gt;&gt;', true); ?>
    </p>
  </div>
  <div class="single__pageback">
    <a href="<?php echo get_category_link(2); ?>"> &lt;&lt;
      <?php
      $postcat = get_the_category();
      echo $postcat[0]->name;
      ?>一覧へ戻る</a>
  </div>


</div>




<div id="contact">
  <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
  <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
</div>

<?php get_footer(); ?>