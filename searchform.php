<?php 
/* 
 * Buscador (Search Form)
 * 
 * @package Explooring Theme
 * @since 1.0.3
 */ 

?>
<form role="search" method="get" class="search-form search-form--menu" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field"
        placeholder="Ingresa tu búsqueda"
        value="<?php echo get_search_query() ?>" name="s"
        title="<?php echo esc_attr_x( 'Search', 'label' ) ?>" 
    />
    <input type="submit" value="Buscar" />
    <div class="search-submit"></div>
</form>