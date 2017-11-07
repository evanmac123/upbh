<?php
/*
Template Name: Right Sidebar
*/
get_header(); ?>

<div class="gray-header">
	<h2 class=" grid-container entry-title"><?php the_title(); ?></h2>
</div>
<div class="main-wrap sidebar-right grid-container">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile;?>
	 </main>
	 <aside class="sidebar">
		<div class="side-quote">
		<div class="side-quote__callout">
			<div class="side-quote__quote">
				"<?php the_field("side-quote"); ?>"
						</div>
			<div class="side-quote__author">
				<span class="bracket .fa">
					<i class="fa fa-quote-right">
					</i>
				</span>
				<div class="side-quote__author-name">
				~<?php the_field("side-author"); ?>
				</div>
			</div>
				</div>
			<div class="side-quote__photo">
				<img src="<?php the_field("side-photo"); ?>">
			</div>
		</div>

	 </aside>
</div>
<?php get_footer();
