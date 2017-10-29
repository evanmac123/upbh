<?php
/*
Template Name: Front
*/
get_header(); ?>
<div class="front">
	<div class=front-header>
		<header class="front-hero" role="banner" style="background-image:url('<?php the_field("banner-background"); ?>') ">
			<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="marketing-left small-12 medium-6 cell">
						<?php the_field("banner-content-left"); ?>
				</div>
				<div class="medium-6 marketing-right cell">
					<img src="<?php the_field("banner-content-right"); ?>">
				</div>
			</div>
		</div>
	</header>
</div>

<div class="main-wrap full-width">
	<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile;?>
		</main>
	</div>
</div>
	<?php get_footer();
