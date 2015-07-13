<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>

	<div class="entry-content">
		<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure> 
	</div>
    	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php reverie_entry_meta(); ?>
       </header>
	   <?php the_content(' Read on...'); ?>
       
        <div class="bar">
									<div class="bar-frame clearfix">
										<div class="meta-info">
											<div class="share">
                                            
                                            <!-- Pinterest -->
												<?php if (has_post_thumbnail( $post->ID ) ){ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
												<a onClick="MyWindow=window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $image[0]; ?>&description=<?php the_title(); ?>','MyWindow','width=600,height=400'); return false;" style="cursor:pointer;" target="_blank" id="pinterest-share"><i class="icon-pinterest"></i></a>
												<?php } else { ?>
												<a onClick="MyWindow=window.open('http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=&description=<?php the_title(); ?>','MyWindow','width=600,height=400'); return false;" style="cursor:pointer;" target="_blank" id="pinterest-share"><i class="icon-pinterest"></i></a>
												<?php }?>
                                                
                                                
												<!-- twitter -->
												<a class="share-twitter" onclick="window.open('http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>','twitter','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="<?php the_title(); ?>" target="blank"><?php _e('<i class="icon-twitter"></i>','cr'); ?></a>
												
												<!-- facebook -->
												<a class="share-facebook" onclick="window.open('http://www.facebook.com/share.php?u=<?php the_permalink(); ?>','facebook','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" title="<?php the_title(); ?>"  target="blank"><?php _e('<i class="icon-facebook"></i>','cr'); ?></a>
												
												<!-- google plus -->
												<a class="share-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','gplusshare','width=450,height=300,left='+(screen.availWidth/2-375)+',top='+(screen.availHeight/2-150)+'');return false;"><?php _e('<i class="icon-google-plus"></i>','cr'); ?></a>
												
												<!-- Linkedin -->
												<a onClick="MyWindow=window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php echo home_url(); ?>','MyWindow','width=600,height=400'); return false;" title="Share on LinkedIn" style="cursor:pointer;" target="_blank" id="linkedin-share"><i class="icon-linkedin"></i></a>
												
												
											</div><!-- share -->
																			

									  	</div><!-- meta info -->
									</div><!-- bar frame -->
								</div><!-- bar -->
       <div class="bottom-border"></div>
	
</article>