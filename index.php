<?php get_header(); ?>

<main>
  <div class="firstview">
    <div class="firstview__eyecatch"><img src="<?php echo get_template_directory_uri(); ?>/img/firstview.jpg" alt=""></div>
    <div class="firstview__content">
      <h1 class="firstview__content-eyecatch">
        Commit to the <span class="change__clr">growth</span><br>for everyone
      </h1>
      <p class="firstview__content-sub-copy">全ての人の<span class="change__clr">成長</span>にコミットする</p>
      <p class="firstview__content-txt">Educational Technology Company<br>estra inc since 2019</p>
    </div>
  </div>

  <div id="news" class="small-container">
    <p class="common__sub-ttl">News</p>
    <h2 class="common__ttl">新着情報</h2>
    <div class="news__border-top"></div>
    <ul class="news__list">
      <?php
      $posts = new WP_Query(
        array(
          'post_type' => 'news',
          'posts_per_page' => 5,
        )
      );
      if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
      ?>
          <li>
            <a class="news__list-link" href="<?php the_permalink(); ?>">
              <span class="news__list-date"><?php echo get_the_date('Y-m-d'); ?></span>

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
                    echo '<small class="new"><span class="news__new-label">New</span></small>';
                  endif;
                endif;
                ?>
              </span>
              <span class="news__list-detail">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 80) {
                  $title = mb_substr($post->post_title, 0, 80, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </span>
            </a>
          </li>
      <?php endwhile;
      endif;
      wp_reset_query(); ?>
    </ul>
    <div class="news__border-bottom"></div>
    <p class="news__articles-link">
      <a href="<?php echo get_post_type_archive_link('news'); ?>" class="blog__link">ニュース一覧へ</a>
    </p>
  </div>

  <div id="about">
    <div class="container">
      <p class="common__sub-ttl">About</p>
      <h2 class="common__ttl">Technology × Coaching</h2>
      <div class="flex__item about__item">
        <p class="about__item-txt"><span>株式会社estraはデジタル化が遅れている教育業界に最新のテクノロジーを導入することによって教育のDXを実現します。</span>独自のオペレーションとコーチングを融合した新しい教育の仕組みにより、一人ひとりに合わせた最適な教育を提供します。</p>
        <div class="about__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt=""></div>
      </div>
    </div>
  </div>

  <div id="service" class="container">
    <p class="common__sub-ttl">Service</p>
    <h2 class="common__ttl">サービス内容</h2>
    <div class="service-wrap">
      <div class="service-wrap__item--first">
        <img src="<?php echo get_template_directory_uri(); ?>/img/service__first.svg" alt="">
        <div class="service-wrap__item-sub">
          <h3 class="service-wrap__item-content-ttl">教育事業</h3>
          <p>サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
        </div>
      </div>
      <div class="service-wrap__item service-wrap__item--second">
        <img src="<?php echo get_template_directory_uri(); ?>/img/service__first.svg" alt="">
        <div class="service-wrap__item-content">
          <h3 class="service-wrap__item-content-ttl">教育事業</h3>
          <p>サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
        </div>
      </div>
      <div class="service-wrap__item service-wrap__item--third">
        <img src="<?php echo get_template_directory_uri(); ?>/img/service__first.svg" alt="">
        <div class="service-wrap__item-content">
          <h3 class="service-wrap__item-content-ttl">教育事業</h3>
          <p>サンプルテキストがここには入ります。サンプルテキストがここには入ります。サンプルテキストがここには入ります。</p>
        </div>
      </div>
    </div>
  </div>

  <div id="blog">
    <div class="container">
      <p class="common__sub-ttl">Blog</p>
      <h2 class="common__ttl">ブログ</h2>
      <div class="flex__item blog-wrap">
        <?php
        $blog_query = new WP_Query(
          array(
            'post_type'      => 'post',
            'category_name' => 'blog',
            'posts_per_page' => 3,
          )
        );
        ?>
        <?php if ($blog_query->have_posts()) : ?>
          <?php while ($blog_query->have_posts()) : ?>
            <?php $blog_query->the_post(); ?>

            <a class="blog-wrap__item" href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="noi-mages" class="blog-wrap__item-eyecatch">
              <?php endif; ?>
              <?php if (!is_category() && has_category()) : ?>
                <span class="blog-wrap__item-cat"><?php $postcat = get_the_category();
                                                  echo $postcat[0]->name;
                                                  ?>
                </span>
              <?php endif; ?>

              <div class="blog-wrap__item-content">
                <h3 class="blog-wrap__item-content-ttl">
                  <?php
                  if (mb_strlen($post->post_title, 'UTF-8') > 28) {
                    $title = mb_substr($post->post_title, 0, 28, 'UTF-8');
                    echo $title . '…';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </h3>
                <ul class="flex__item">
                  <li class="blog-wrap__item-content-tag"><?php echo get_the_date('Y-m-d'); ?></li>
                  <li class="blog-wrap__item-content-tag">
                    <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach ($posttags as $tag) {
                        echo '<span class="tag">' . $tag->name . '</span>';
                      }
                    } ?>
                  </li>
                </ul>
              </div>
            </a>
          <?php endwhile; ?>
        <?php else : ?>
          <p>投稿が見つかりません。</p>
        <?php endif; ?>
      </div>
      <p class="blog-articles_link">
        <?php
        $category_id = get_cat_ID('$blog');
        $category_link = get_category_link($category_id);
        ?>
        <a href="<?php echo get_category_link(2); ?>?>" class="blog__link">一覧ページへ</a>
      </p>
    </div>
  </div>

  <div id="company" class="small-container">
    <p class="common__sub-ttl txt__ctr">Company</p>
    <h2 class="common__ttl txt__ctr">会社概要</h2>
    <table class="company-table">
      <tr>
        <th class="company-table__th">会社名</th>
        <td class="company-table__td">株式会社estra</td>
      </tr>
      <tr>
        <th class="company-table__th">代表者名</th>
        <td class="company-table__td">福場凜太郎</td>
      </tr>
      <tr>
        <th class="company-table__th">本社所在地</th>
        <td class="company-table__td">東京都渋谷区1-1-1</td>
      </tr>
      <tr>
        <th class="company-table__th">従業員数</th>
        <td class="company-table__td">100名</td>
      </tr>
      <tr>
        <th class="company-table__th">電話番号</th>
        <td class="company-table__td">0120-00-0000</td>
      </tr>
      <tr>
        <th class="company-table__th">資本金</th>
        <td class="company-table__td">¥10,000,000</td>
      </tr>
    </table>
  </div>

  <div id="recruit">
    <div class="flex__item">
      <a class="recruit__item recruit__item--first" href="">
        <h2 class="recruit__item-ttl">採用情報</h2>
      </a>
      <a class="recruit__item recruit__item--second" href="">
        <h2 class="recruit__item-ttl">社員インタビュー</h2>
      </a>
    </div>
  </div>

  <div id="contact">
    <h2 class="contact__ttl">株式会社estraへのお問い合わせはこちらから</h2>
    <a href="<?php echo home_url("contact"); ?>" class="contact__btn">お問い合わせ</a>
  </div>
</main>
<?php get_footer(); ?>