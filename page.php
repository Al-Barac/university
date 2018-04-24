<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>ADD CUSTOM FIELD Learn how the school of your dreams got started.</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
		
		<?php
			$the_parrent = wp_get_post_parent_id( get_the_ID() );
			 if ( $the_parrent ): 
		 ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($the_parrent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($the_parrent); ?></a> <span class="metabox__main">
      	<?php the_title(); ?>
      </span></p>
    </div>
  	<?php endif; ?>

   <?php 
   	$testArray = get_pages(
	   		[
	   			'child_of' => get_the_ID()
	   		]
   	);
   	if ($the_parrent or $testArray ): ?> 

    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($the_parrent); ?>"><?php echo get_the_title($the_parrent); ?></a></h2>

      <ul class="min-list">

       	<?php 

       		if ($the_parrent) {
       			$findChildrenOf = $the_parrent;
       		} else {
       			$findChildrenOf = get_the_ID();
       		}

       		$args = [
       			'title_li' => '',
       			'child_of' => $findChildrenOf,
       			'sort_column' => 'menu_order'
       		];
       		wp_list_pages( $args ); 

       	?>
      </ul>
    </div>
  <?php endif; ?>

    <div class="generic-content">
    	
    
    	<!-- post -->
    	<?php the_content(); ?>

    	<?php endwhile; ?>
    	<!-- post navigation -->
    	<?php else: ?>
    	<!-- no posts found -->
    	<?php endif; ?>
		
    </div>

  

</div>


<?php get_footer(); ?>