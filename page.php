<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
    <article class="post page">
      <?php $args = array(
        'child of' => $post->ID,
        'title_li' => ''
      ); ?>
      <?php wp_list_pages($args); ?>
		    <h2><?php the_title(); ?></h2>
        <?php the_content();  ?>
      </article>
      <?php	} // end while
} else{
  echo "<p>no content found</p>";
}

get_footer();
?>
