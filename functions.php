<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets'); 

register_nav_menu('sidomenu', 'Sidomeny');
register_nav_menu('sidomenu2', 'Sidomeny2');

 
register_sidebar(

    [

       'name' => 'kontakt',

       'Description' => 'kontakter',

       'id' => 'kontaktwidget', 

       'before_widget' => ' ',

    ]

);

register_sidebar(
    [
        'name' => 'search',
        'Description' => 'top_bar_search',
        'id' => 'search-bar',
        'before-widget' => ' ',
    ]
);

register_sidebar(
    [
        'name' => 'aside',
        'Description' => 'aside-bar',
        'id' => 'page-link',
        'before-widget' => ' ',
    ]
); 

?>