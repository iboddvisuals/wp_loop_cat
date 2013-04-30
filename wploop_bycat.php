<?php 
    //some of these settings are necessary for older WP versions. This was tested on 3.3.2 and works fine.

    define('WP_USE_THEMES', false); //don't style it like the WP stuff
    
    //Loads the WordPress environment and template. This makes all the fn's available.
    //point this at the location of the current WordPress installation.
    require('blog/wp-blog-header.php'); 

    //require_once('blog/wp-config.php'); //loads the db settings 
	//get_header();
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>


<div class="loop">

 <?php
query_posts(array(
    'category_name' => 'news', // get posts by category name
    'posts_per_page' => -1 // all posts
));
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title() ;?></h2>
	<?php the_post_thumbnail(); ?>
	 <?php the_content(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts to list</p>

<?php endif; ?>


</div>  




</body>
</html>