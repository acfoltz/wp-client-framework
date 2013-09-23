<?php get_header();  ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 single">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<!-- pagintation -->
				<div id="pagination" class="clearfix">
					<div class="past-page"><?php previous_posts_link( 'newer' ); ?></div>
					<div class="next-page"><?php next_posts_link( 'older' ); ?></div>
				</div><!-- pagination -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; endif; ?>


		</div><!-- END COL12 -->
	</div><!-- END ROW -->
</div><!-- END CONTAINER -->

<?php get_footer(); ?>
