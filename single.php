<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<!-- wordpressの設定によって、言語使用を変える設定に。 -->

<head>
  <?php get_header(); ?>
</head>

<body　<?php body_class(); ?>>
<!-- これを追加することで、ログインしている状態なのか、してない状態なのかがbodyタグのクラスから推測できるように -->


  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>
  <!-- 拡張子は不要 -->

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- Page Header -->
      <?php
      if (has_post_thumbnail()): 
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');//fullが一番画質がいいが、largeの方がファイルサイズが小さくバランスが取れる。もしさらに大きく使いたい場合は管理画面の設定＞メディアから変更可能
      else:
        $img = array(get_template_directory_uri() . '/img/post-bg.jpg');//アイキャッチが設定されていない場合はデフォルトでこれを表示するよ
      endif;
      ?>

      <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title(); ?></h1>
                <span class="meta">Posted by
                  <?php the_author(); ?>
                  on <?php the_date(); ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_post_thumbnail(array(100, 100), array('alt' => 'アイキャッチ画像')); ?>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

      <hr>

    <?php endwhile; ?>
  <?php else : ?>
    <p>記事が見つかりませんでした</p>
  <?php endif; ?>

  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- 拡張子は不要 -->

  <?php get_footer(); ?>
</body>

</html>