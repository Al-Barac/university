<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<h1><?php the_title(); ?></h1>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<p>No posts found</p>
<!-- no posts found -->
<?php endif; ?>
 