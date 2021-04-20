<?php 
while (have_posts()) {
    the_post();
    the_title(); // Hämtar och skriver ut rubriken till sidan
}
?>