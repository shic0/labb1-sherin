<?php
get_header();

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
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <?php
                while (have_posts()) {
                    the_post();
                }
                ?>
                <div class="text">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <?php dynamic_sidebar('kontakt'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

</main>	

<?php
get_footer();
?>

</body>

</html>