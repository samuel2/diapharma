<?php


/*
Template Name: Special Layout
*/


get_header();

	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		    <article class="post page">
			<h2>
				<?php the_title(); ?>
			</h2>
			
			<!-- info-box -->
			<div class="info-box">
				<h4>Disclaimer title</h4>
				<p>
				DIAPHARMA est une société qui a vu le jour pour 
				la toute première fois dans la 
				ville de Bafoussam le 17 décembre 2011 et le 20 janvier 2012 
				</p>
			</div><!-- /info-box -->

			<?php the_content(); ?>
		    </article>

		<?php endwhile;
	
	else :
	    echo '<P>Content not found</p>';
	endif;

get_footer();

?>
