<?php

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
    <article class="post page">
      <div class="column-container clearfix">
        <div class="title-column">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
      <div class="text-column">
        <?php the_content();  ?>
      </div>
    </article>
      <?php	} // end while
} else{
  echo "<p>no content found</p>";
}

get_footer();
?>
