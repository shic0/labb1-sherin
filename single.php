<?php 
get_header();
?>

<main>
<?php 
    while (have_posts()) {
        the_post();             // Hämtar startar loopn

?>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                        <img src="<?php the_post_thumbnail_url();?> "/>
						<h1 class="title"><?php the_title();?> </h1>

</main>

<?php 
get_footer();
?>