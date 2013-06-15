<?php get_header(); ?>
<div id="main" class="group">
	<div id="posts">
		<?php while (have_posts() ) : the_post(); ?>
            <div class="post group">
            	
				<h1><a href="<?php the_permalink(); ?>" title="<?php echo __('Permalink to', CI_DOMAIN).' '.get_the_title(); ?>"><?php the_title(); ?></a></h1>
				<p class="date"><?php echo get_the_date(); ?></p>
				<?php ci_e_content(); ?>
            </div>
   			<?php if (is_single() or is_page()) comments_template(); ?>
		<?php endwhile; ?>

		<?php ci_pagination(); ?>
	</div><!-- #posts -->


    <div id="sidebar">
		<?php dynamic_sidebar('sidebar-right'); ?>
    </div><!-- #sidebar -->
</div><!-- #main -->

<?php get_footer(); ?>
