<?php get_header(); ?>
  <?php if (is_category()): ?>



    <?php $args = array ( 'tag' => 'highlight', 'post_per_page' => 1 ); query_posts( $args ); ?>
    <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

      <section class="herospace">
          <div class="herospace__wrapper" style="background-image: url('/aconcagua/wp-content/themes/yeopress/images/herospace.jpg')">
            <!-- <span class="herospace__category"><?php //echo get_post_meta($post->ID, 'category', true); ?></span> -->
            <div class="herospace__data">
              <!-- <span class="herospace__data__category"><?php //echo get_post_meta($post->ID, 'category', true); ?></span> -->
              <h2 class="herospace__data__title"><?php the_title() ?></h2>
              <p class="herospace__data__description"><?php the_excerpt() ?></p>
              <small class="herospace__data__author">Por <?php echo get_post_meta($post->ID, 'writter', true); ?></small>
            </div>
          </div>
      </section>

    <?php endwhile; endif; ?>

    <?php wp_reset_query(); ?>


    <section class="category-page">
      <div class="category-page__title">
        <h3><?php single_cat_title(); ?></h3>
      </div>

      <div class="category-page__content">
        <?php get_template_part('loop', 'archive'); ?>
      </div>
    </section>
  <?php endif; ?>


	<!-- <?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php if (is_category()): ?>
			<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
		<?php elseif(is_tag()): ?>
			<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php elseif (is_day()): ?>
			<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
		<?php elseif (is_month()): ?>
			<h2>Archive for <?php the_time('F, Y'); ?></h2>
		<?php elseif (is_year()): ?>
			<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		<?php elseif (is_author()): ?>
			<h2 class="pagetitle">Author Archive</h2>
		<?php elseif (isset($_GET['paged']) and !empty($_GET['paged'])): ?>
			<h2 class="pagetitle">Blog Archives</h2>
		<?php endif; ?>
		<?php get_template_part('loop', 'archive'); ?>
	<?php else : ?>
		<h1>Nothing found</h1>
	<?php endif; ?> -->
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
