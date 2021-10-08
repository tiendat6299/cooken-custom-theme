<?php
/**
 * The template for displaying all pages
 * 
 * This is the template that displays all pages by default.
 * 
 * 
 * @package cooken
 */

get_header();
?>
            <div class="main">
                <main>
                    <div class="noidung" style="width: 100%%; margin:0 auto;">
                        <div class="img_banner_head">
                            <img src="http://localhost/Cooken/wp-content/uploads/2021/10/banner_none.png">
                        </div>
                        <div class="section" style="margin: 0 auto; text-align: center;">
                            <?php
                                if( have_posts() ):
                                    while ( have_posts() ): the_post();
                                        ?>
                                            <article style="col">
                                                <div><?php the_content(); ?></div>               
                                            </article>
                                        <?php
                                    endwhile;
                                else:
                            ?>
                                <p>Nothing to display</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </main>
            </div>
<?php get_footer(); ?>