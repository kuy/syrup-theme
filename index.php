<?php get_header(); ?>

	<div id="primary" class="content-area pure-g">
	    <div class="pure-u pure-u-md-1-5"></div>
		<main id="main" class="site-main pure-u-1 pure-u-md-3-5" role="main">

		<h1 class="site-title">
			<a href="/"><span>maimai travel</span></a>
		</h1>

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile;

		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
		<div class="pure-u pure-u-md-1-5"></div>
	</div><!-- .content-area -->

<?php get_footer(); ?>
