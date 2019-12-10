<?php
/*
Template Name: Contact Page
*
* @package Felicity
*/
get_header(); ?>
	<div id="main" class="contact-form <?php echo of_get_option('contact_layout_settings');?>">
		<h1 id="post-title" <?php post_class('entry-title'); ?>><?php the_title(); ?> </h1>
		<?php if (of_get_option('enable_breadcrumbs') == '1') { ?>
			<div class="breadcrumbs">
				<div class="breadcrumbs-wrap"> 
					<?php get_template_part( 'breadcrumbs'); ?>
				</div><!--breadcrumbs-wrap-->
			</div><!--breadcrumbs-->
		<?php } ?>
		<div class="contact-info">
			<div class="one_third">
				<div class="box-icon">
					<span>
						<i class="fa fa-map-marker"></i>
					</span>
				</div>
				<h4 class="box-title"><?php _e('Hely','felicity'); ?></h4>
				<div class="box-content">
					<?php echo of_get_option('contact_address'); ?>
				</div>
			</div>
			<div class="one_third">
				<div class="box-icon">
					<span>
						<i class="fa fa-phone"></i>
					</span>
				</div>
				<h4 class="box-title"><?php _e('Telefon','felicity'); ?></h4>
				<div class="box-content">
					<?php echo of_get_option('contact_phone'); ?>
				</div>
			</div>
			<div class="one_third last">
				<div class="box-icon">
					<span>
						<i class="fa fa-envelope-o"></i>
					</span>
				</div>
				<h4 class="box-title"><?php _e('E-mail','felicity'); ?></h4>
				<div class="box-content">
					<?php echo of_get_option('contact_email'); ?>
				</div>	
			</div>
		</div>
		<div class="clear"></div>
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="content-box">
				<div id="post-body">
					<div <?php post_class('post-single'); ?>>
						

						<div id="article">
			
							<?php the_content(); ?>
							
						</div><!--article-->
					</div><!--post-single-->
					<div class="post-sidebar">
						<div class="short-info">
							<div class="single-meta">
								<?php dynamic_sidebar('secondary-sidebar'); ?>
							</div><!--single-meta-->
						</div><!--short-info-->
					</div><!--post-sidebar-->
				</div><!--post-body-->
			</div><!--content-box-->
			<?php if ( of_get_option('page_sidebar_position') != 'none' ) { ?>
				<div class="sidebar-frame">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			<?php } ?>
		<?php endwhile; ?>
	</div><!--main-->
<?php get_footer(); ?>
