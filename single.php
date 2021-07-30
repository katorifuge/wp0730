<?php get_header(); ?>


<div class="category_blog">
  <div class="category_blog-container single_blog-container">
    <a href="">
      <div class="category_blog-item flex__item single_blog-item">
        <div class="category_blog-item-content">
          <?php if (has_category()) : ?>
            <div class="category_blog-item-cat single_blog-item-cat">
              <?php echo get_the_category_list(''); ?>
            </div>
          <?php endif; ?>
          <h3 class="category_blog_ttl">
            <?php the_title(); ?>
          </h3>
          <div class="single_blog-item-tag">
            <p class="single_blog-tag"><?php echo get_the_date('Y-m-d'); ?></p>
            <p class="single_blog-tag">
              <?php the_tags('', ' '); ?>
            </p>
          </div>
          <?php if (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
            <?php endif; ?>
            <p class="category_blog_txt">
              <?php the_content(); ?>
            </p>
        </div>
        <!-- <?php endif; ?> -->
      </div>
    </a>


    <div class="single__category-pagenation">
      <p class="single__category-pagenation-prev">
        <?php next_post_link('%link', '&lt;&lt;  前の記事へ', true); ?>
      </p>
      <p class="single__category-pagenation-next">
        <?php previous_post_link('%link', '次の記事へ  &gt;&gt;', true); ?>
      </p>
    </div>
    <div class="single__category-pageback">
      <a href="<?php echo get_category_link(2); ?>"> &lt;&lt;
        <?php
        $postcat = get_the_category();
        echo $postcat[0]->name;
        ?>一覧へ戻る</a>
    </div>

  </div>
</div>




<div id="contact">
  <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
  <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
</div>

<?php get_footer(); ?>