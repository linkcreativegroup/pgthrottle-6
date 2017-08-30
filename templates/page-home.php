<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
<?php if( get_field('slideshow_home', 'option') == 'Show' ): ?>

		
			<div class="video-hero jquery-background-video-wrapper home-video-wrapper hidden-xs">
				<video class="jquery-background-video" autoplay muted loop poster="#">
					<source src="#" type="video/mp4">
					<source src="#" type="video/webm">
					<source src="#" type="video/ogg">
				</video>
				<div class="video-overlay"></div>
				<div class="slider-space"></div>
			</div>
	
	

<?php if( get_field('home_content', 'option') == 'Show' ): 
echo '<div class="container-fluid page-content-container"><div class="row"><div class="container"><div class="row">';
if( get_field('home_content_sidebar', 'option') == 'Show' ): echo '<div class="col-md-8 col-sm-8 col-xs-12">'; endif;
if( get_field('home_content_sidebar', 'option') == 'Hide' ): echo '<div class="col-md-12 col-sm-12 col-xs-12">'; endif; 
get_template_part ('includes/content','home'); 
echo '</div></div>';
if( get_field('home_content_sidebar', 'option') == 'Show' ):
echo '<div class="col-md-4 col-sm-4 col-xs-12">' .dynamic_sidebar ('sidebar-1'); '</div>'; endif; 
echo '</div></div></div>';
endif; 
if( get_field('home_content', 'option') == 'Hide' ): endif;
endif; if( get_field('parallax_first', 'option') == 'Show' ): ?>
<div class="container-fluid parallax-container parallax-first">
		<div class="parallax-window parallax first" data-parallax="scroll" data-image-src="<?php the_field('parallax_bg_1', 'option'); ?>">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-1 col-sm-6 col-sm-offset-0 col-xs-12">
					
					<!-- Content Goes Here -->
						
					</div>
					<div class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-0 col-xs-12">
						<?php dynamic_sidebar ('parallax-overlay'); ?>
						
					</div>
				</div>
			</div>
		</div>

</div>
<?php endif; 
if( get_field('parallax_first', 'option') == 'Hide' ): endif; 
if( get_field('home_widgets', 'option') == 'Show' ): ?>
<div class="container-fluid home-widget-container">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<h3 class="widget-title">Recent News</h3>
					<?php query_posts('category_name=blog&showposts=2'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="recent-news-container">
        				<h4 class="recent-news-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        <div class="recent-news-excerpt">
                        	<?php the_excerpt(); ?>
                        </div><!-- recent-news-excerpt -->
                        <a class="btn btn-default home-cat-btn pull-right" href="<?php the_permalink(); ?>">Read More</a>
                    </div><!-- recent-news-container -->
                    <?php endwhile; endif; ?>  
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<?php dynamic_sidebar ('home-right'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; get_footer();?>