<?php/** * The main template file. * @package metro-creativex */get_header(); ?>        <?php if ( have_posts() ) : ?>		<h1><?php _e('Latest articles','metro-creativex'); ?></h1>         <?php else: ?>           <h1><?php _e('404 - not found','metro-creativex'); ?></h1>        <?php endif; ?>		</div><!--/topside-->		<div id="content">			<?php if ( have_posts() ) : ?>			<?php /* The loop */ ?>			<?php while ( have_posts() ) : the_post(); ?>				<?php get_template_part( 'content', get_post_format() ); ?>			<?php endwhile; ?>			<?php metro_creativex_pagination(); ?>			<?php else : ?>				<?php get_template_part( 'content', 'none' ); ?>			<?php endif; ?>		</div><!-- /content --><?php get_footer(); ?>