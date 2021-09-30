<?php

if( is_active_sidebar('shop-sidebar')) :
    dynamic_sidebar( 'shop-sidebar' );
    else : 
        _e('This is sidebar.' );
    endif;

    

?>