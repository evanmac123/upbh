<?php
/*
Template Name: Home
*/
get_header(); ?>
<div class="front">
	<div class=front-header>
		<header class="front-hero" role="banner" style="background-image:url('<?php the_field("banner-background"); ?>') ">
			<div class="grid-x grid-container">
				<div class="marketing-left small-12 medium-6 cell">
						<?php the_field("banner-content-left"); ?>
				</div>
				<div class="medium-6 cell marketing-right">
					<img src="<?php the_field("banner-content-right"); ?>">
				</div>
			</div>
	</header>
	<section class="grid-container">
		<div class="home__quote large-12 italic">
			<p >"We offer individualized, effective, and innovative solutions for your clients, neighbors, colleagues, friends, acquaintances, and family members struggling with Prescription Pill Dependency, Substance Abuse or Addiction. Our Industry has consistently
				struggled to provide high-quality services with open minded, assessment driven approaches that improve the quality of life for clients and family members. Our clients are talented, capable men and women who need answers and solutions."
			</p>
			<p>Paul Auchterlonie</p>
			<p>CEO, University Park Behavioral Health</p>
		</div>
	</section>
	<section class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="large-4 cell">
			<img   src="<?php the_field("home-logo-support-1"); ?>">
		</div>
			<div class="large-4 cell">
			<img  src="<?php the_field("home-logo-support-2"); ?>">
		</div>
		</div>
	</section>
	<section class="gray-header">
		<div class="grid-container" >
		<div class="title">
			Detox, Assessment and Residential Treatment Programs
		</div>
	</div>
	</section>
	<section class="grid-container">
		<p>Impactful interaction with our clients and their families is at the core of everything we do. We work hard to provide individualized, medically and therapeutically appropriate care throughout our programs.
		</p>

		<div class="grid-x grid-margin-x">
			<div class="large-4 cell">
			<img   src="<?php the_field("home-logo-location-left"); ?>">
		</div>
			<div class="large-4 cell">
			<img  src="<?php the_field("home-logo-location-mid"); ?>">
		</div>
				<div class="large-4 cell">
				<img  src="<?php the_field("home-logo-location-right"); ?>">
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="large-4 cell">

				<ul class="check">
					<li>Non 12-Step</li>
					<li>30 to 45-day residential program</li>
					<li>Coed</li>
					<li>Mindfulness training; Insight orientation</li>
					<li>Evidence based EMDR and Neurofeedback</li>
					<li>Family Systems</li>
					<li>Trauma Focused</li>
					<li>DBT</li>
					<li>CBT</li>
					<li>Psychiatric/Psychological Testing and Evaluation</li>
					<li>Psychodynamic, Psychoeducational, Psychoanalytic</li>
				</ul>
			</div>
			<div class="large-4 cell">
				<ul class="check">
						<li>Licensed, Accredited Medical Detox</li>
						<li>M.D.s, R.N.s, medications utilized as needed</li>
						<li>24/7 care</li>
						<li>Private rooms, en-suite bathrooms Optional; 2-week residential Assessment Program<span style="background-color: transparent;">&nbsp;</span></li>
						<li><span style="background-color: transparent;">Comprehensive, Individualized Psychiatric/Psychological Assessments </span></li>
						<li><span style="background-color: transparent;">Assessment findings presented to client and family </span></li>
						<li><span style="background-color: transparent;">Strengths driven philosophy </span></li>
						<li><span style="background-color: transparent;">Aftercare planning- Family programming</span></li>
					</ul>
			</div>
			<div class="large-4 cell">

				<ul class="check">
					<li>Traditional 12-Step</li>
					<li>90-day residential</li>
					<li>Single Gender: Male (Taos), Female (Pikes Peak)</li>
					<li>Attachment Theory</li>
					<li>Family Systems and Family Program</li>
					<li>Trauma Informed</li>
					<li>Mountain locations; Outdoor Adventure programming</li>
					<li>Shame Reduction and Resilience</li>
					<li>Relapse Management and Recovery Maintenance</li>
					<li>Psychosocial driven, life-skill centered motivational change</li>
				</ul>
			</div>
			<p class="italic">
				*All programs serve adult clients, 18 years and above; Prescription Pill Dependence or Substance Use Disorder primary, with or without co-occurring disorders
			</p>
		</div>
	</section>
	<section class="gray-header">
		<div class="grid-container" >
		<div class="title">
			Quick and Simple Admission Process:
		</div>
		<p class="italic">
			Our Admissions professionals understand our families and clients. They will assist with detailed explanations and timely responses to all questions. This is not a call center; families and clients speak with team members ready to connect directly on the phone for as long as it takes to deliver a vast network of resources, whether within our company or not. We have internal billing services for in and out of network private insurance plans (no Medicaid) to help our clients and families with financial services. Our confidential Insurance Verification form can be found online, for your convenience.
		</p>
	</div>
	</section>
	<section class="grid-container" >
		<div class="gallery-title">
		Insurance accepted. We are unable to accept Medicare, Medicaid, and Tricare at this time.
	</div>
		<div class="gallery grid-x">
				<?php
					$images = get_field('home-insurance');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
			<div class="large-2 small-6 cell gallery-image">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
				<?php endforeach; ?>
				<?php endif; ?>
		</div>
	</section>
</div>

	<?php get_footer();
