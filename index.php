<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package midterm
 */
get_header(); ?>

	<h1 id="indexH1"> Welcome to the Debate Club at BMCC </h1>

	<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
 
}

#panel {
    padding: 50px;
    display: none;
}
</style>
</head>
<body>
 
<div id="flip">Click to slide show Todays Debate Question of the day!</div>
<div id="panel"> Xbox ONE or PS4? AND GO! </div>

</body>

<div id="frontPic">
	<img src="https://upload.wikimedia.org/wikipedia/en/5/58/Debate_Mate_Cup_2012_Final.jpg">
</div>
<h2 id="indexH2"> Here are some people from out Club and what they have to say !</h2>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
					 <div class="personTopic">
						<?php the_title(); ?>
							<?php the_content(); ?>
					 </div>


		<?php endwhile; ?>

	

<?php the_posts_navigation(); ?>



<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>








		</main><!-- #main -->
	</div><!-- #primary -->

