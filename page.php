<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body　<?php body_class(); ?>>


  <!-- Navigation -->
  <?php get_template_part('includes/header'); ?>

  <!-- 念のためのhave_posts -->
  <?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- Page Header -->
      <header class="masthead" style="background-image: url('img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="page-heading">
                <h1><?php the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
          </div>
        </div>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>

  <hr>

  <!-- Footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- 拡張子は不要 -->

  <?php get_footer(); ?>
</body>

</html>