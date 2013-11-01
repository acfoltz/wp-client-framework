<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1 class="headline entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" itemprop="name" itemprop="entry-title">
			<?php the_title(); ?>
		</a>
	</h1>

	<div class="the-content entry-content" itemprop="articleBody">
		<?php the_content( '<span class="readMore">Read More <i class="icon-chevron-sign-right"></i></span>' ); ?>

		<?php wp_link_pages(); ?>
	</div><!-- the-content -->

	<div class="meta clearfix">
		<div class="meta-category" itemprop="articleSection"><?php echo get_the_category_list(); ?></div>
		<div class="meta-tags"><?php echo get_the_tag_list('<ul> <li>','</li> <li>','</li></ul>'); ?></div>
	</div><!-- Meta -->

	<div class="author-container">
		<!-- Needed for Schema -->
		<p>This post was last updated on <span class="updated"><?php the_time (get_option("date_format")); ?></span> by
		<span class="vcard author"><span class="fn"><?php the_author(); ?></span></span>
		</p>


		<?php if ( is_single()) { ?>

		<?php get_template_part( 'author-bio' ); ?>

		<<div class="wordCount">Total Words: <span itemprop="wordCount"><?php echo wordcount(); ?></span></div>

		<?php } ?>
	</div>

</article>
