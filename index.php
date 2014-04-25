<?php get_header(); ?>
<body>
	<a href="https://www.mozilla.org/" id="tabzilla">mozilla</a>
	<br/><br/><br/><br/>
	<div class="row">
		<div class="small-8 columns"></div>
    <div class="small-4 columns"><h3><i class="fa fa-lightbulb-o"></i> Equipo Creativo</h3></div>
	</div>
	<div class="row">
	  <hr/>
  </div>
  <div class="row">

  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	<div class="large-4 columns">
			  
			    <div class="dateBox"><span class="month"><?php the_time('F') ?></span><span class="day"><?php the_time('jS') ?></span>
			    	<span class="year"><?php the_time('Y') ?></span>
			    </div>
			    <a href="<?php echo get_permalink(); ?>" rel="bookmark" title="demo">		    		

			    	<?php $imgs = get_the_post_thumbnail($post->ID);
					    /*get the img URL, delete the <img /> tag */   
					    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $imgs, $matches);
					    /*the image URL*/
					    $img = $matches [1] [0];
					    /*echo the full img*/
					    echo '<img class="screenshot" src="' . $img . '" alt="" />';
						?>		     
						
			    </a>

			</div>
		<?php endwhile; else: ?>
		<?php _e('Sorry, no posts matched your criteria.'); ?><?php endif; ?>
  	<div class="large-4 columns"></div>
  </div>	

	<?php get_footer(); ?>