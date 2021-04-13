<?php

/* if ( have_posts() ) {
    while ( have_posts() ) {
 
        the_post(); ?>
 
        <h2><?php the_title(); ?></h2>
 
        <?php the_content(); ?>
 
    <?php }
} */

?>

<?php
get_header();

?>
<?php
$image = get_the_post_thumbnail_url();
?>

<body>
		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">

								<?php
								wp_nav_menu(
									[
										'container' => 'nav'
									]
								);
								?>


								<!-- <a href="index.html">Hem</a>
							</li>
							<li>
								<a href="blogg.html">Blogg</a>
							</li>
							<li>
								<a href="undersida.html">Undersida</a>
							</li>
							<li>
								<a href="undersida2.html">Undersida 2</a>
							</li>
							<li>
								<a href="undersida3.html">Undersida 3</a>
							</li>
							<li>
								<a href="undersida4.html">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.html">Kontakt</a> -->
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<main>

			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<?php
								while (have_posts()) {
									the_post();
								}
								?>
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<?php the_content(); ?>
								</div>
								<img src="<?php echo get_template_directory_uri().'./img/city.jpg' ?>" />
							</div>
						</div>
					</div>
				</div>
			</section>

		</main>

		<?php
		get_footer();
		?>

	</div>


</body>

</html>