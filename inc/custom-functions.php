<?php
/**
 * Costum functions with html, conditional, etc
 *
 * @package    Explooring Theme
 * @since      Explooring Theme 1.0.0
 */

function post_category( $id ) {
    foreach((get_the_category( $id )) as $category) {
        echo $category->cat_name; 
    }
}