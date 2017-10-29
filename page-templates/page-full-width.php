<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<header class="gray-header">
	<h2 class=" grid-container entry-title"><?php the_title(); ?></h2>
</header>
<div class="main-wrap full-width">
	<main class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php comments_template(); ?>
		<?php endwhile;?>
	</main>
</div>
<?php get_footer();
