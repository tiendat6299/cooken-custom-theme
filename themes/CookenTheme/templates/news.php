<?php

use function PHPSTORM_META\type;

get_header(); 

/*
    Template Name: News
*/
?>
<div class="main">
    <div class="container" role="main">
        <div class="section" id="banner">
            <div class="section_banner_parent">
                <div class="section_banner">
                    <div class="section_banner_content">
                        <div class="row banner">
                            <div class="col-6">
                                <div class="title_banner bounceInLeft">
                                    <h1>
                                        Tin Tức
                                    </h1>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="img_banner bounceInRight ">
                                    <div class="img_banner_child">
                                        <img src=" http://localhost/Cooken/wp-content/uploads/2021/09/Group-504-1-1.png.webp "
                                            alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section container news-container px-5 mx-auto" id="101">
            <div class="py-5">
                <h3 class="px-3 font-weight-bold">
                    Bài Viết Gần Đây
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- <?php echo do_shortcode( '[ivory-search id="165" title="Default Search Form"]' ); ?> -->

                    <div class="px-3">
                    <?php
                        if (get_query_var('paged')) {
                            $paged = get_query_var('paged');
                        } elseif (get_query_var('page')) {
                            $paged = get_query_var('page');
                        } else {
                            $paged = 1;
                        }
                        $temp = $wp_query;
                        $wp_query = null;
                        $wp_query = new WP_Query('posts_per_page=3&paged=' . $paged);
                        if ($wp_query->have_posts()) :
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                        ?>
                        <div class="row mb-4">
                        <div class="col-md-5 col-sm-12">
                            <a href="<?php the_permalink() ?>"
                                title="<?php the_title() ?>" rel="nofollow" target="_blank">
                                <div class="news-images img-hover-zoom--colorize">
                                        <?php the_post_thumbnail(); ?>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <h3 class="text-dark">
                                <a class="text-dark news-a"
                                    href="<?php the_permalink() ?>"
                                    title="<?php the_title(); ?>" rel="nofollow"
                                    target="_blank"><?php the_title(); ?></a>
                            </h3>
                            <div class="blfe-post-list-meta">
                                <span><?php the_date( 'j F' ); ?></span>
                            </div>
                            <p class="blfe-post-list-excerpt"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            <a class="news-a"
                                href="<?php the_permalink() ?>">
                                <span class="news-a text-btn font-weight-bold">Đọc Thêm</span>
                            </a>
                            
                        </div>
                    </div>

                    <?php   endwhile; ?>
                        <div class="paginav" style="">
                        <?php
                            the_posts_pagination(array(
                            'mid_size'      => 2,
                            'prev_next'    => false,
                            ));
                            ?>
                        </div>
                            
                        <?php
                        $wp_query = null;
                        $wp_query = $temp;
                        wp_reset_postdata();
                        endif;
                        ?>
                    </div>   
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <!-- search -->
                    <div class="news-search mb-5">
                        
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                    </div>
                    <!-- end search -->
                    <!-- bài viết nổi bật -->
                    <div class="ahihi">
                        <span class="ml-3"><span class="font-weight-bold">Bài Viết Nổi Bật</span>
                            <ul>
                                <?php
                                
                            $hotNews = new WP_Query(array(
                            'post_type' => 'post',
                            'orderby'   => 'rand',
                            'posts_per_page' => 5
                            ));
                            while($hotNews->have_posts(  )){
                                $hotNews->the_post(  );
                                ?>
                                <li>
                                    <div class="ml-3 mt-2 d-flex">
                                        <div class="flex-shrink-0">
                                            <?php the_post_thumbnail( 'thumbnail' ) ?>
                                        </div>
                                        <div class="ml-3">
                                            <a class="text-decoration-none text-dark" style="text-decoration: none"
                                                href="<?php the_permalink( ) ?>"
                                                title="<?php the_title() ?>"><?php the_title() ?></a>
                                        </div>
                                </li>
                                
                                <?php } ?>
                    <?php wp_reset_postdata(  ); ?>

                            </ul>
                    </div>
                    <!-- end bài viết nổi bật -->
                    <div class="social mt-5">
                        <span class="font-weight-bold">
                            Theo Dõi Cooken Tại

                        </span>
                        <div class="d-flex mt-2 mb-4">
                            <a class="m-auto" href="https://www.facebook.com/cookenvietnam" rel="nofollow noopener"
                                target="_blank"><img loading="lazy" class="icon-social-facebook"
                                    src="https://cookentrading.com.vn/wp-content/uploads/2021/06/Group-1.png"
                                    alt="page-fb" width="57px" height="57px"></a>
                            <a class="m-auto" href="https://www.instagram.com/cooken.vn/" rel="nofollow noopener"
                                target="_blank"><img loading="lazy" class="icon-social-instagram"
                                    src="https://cookentrading.com.vn/wp-content/uploads/2021/06/Group-2.png"
                                    alt="instagram" width="57px" height="57px"></a>
                            <a class="m-auto" href="https://www.youtube.com/user/mallorik13rus" rel="nofollow noopener"
                                target="_blank"><img loading="lazy" class="icon-social-youtube"
                                    src="https://cookentrading.com.vn/wp-content/uploads/2021/06/Group-3.png"
                                    alt="youtube" width="57px" height="57px"></a>
                            <a class="m-auto" href="https://www.tiktok.com/@cooken_agency?lang=vi-VN"
                                rel="nofollow noopener" target="_blank"><img loading="lazy" class="icon-social-tiktok"
                                    src="https://cookentrading.com.vn/wp-content/uploads/2021/06/Vector.png"
                                    alt="page-tiktok" width="57px" height="57px"></a>

                        </div>
                        <span class="font-weight-bold">Đăng Ký Nhận Tin</span>
                        <form class="form-inline mt-2 mb-4">
                            <!-- <input class="form-control border-radius-left form-control-lg" type="search"
                                placeholder="Điền email bạn sử dụng thường xuyên" aria-label="Search">
                            <button class="btn my-2 my-sm-0 border-radius-right btn-search form-control-lg">
                                <i class="fa fa-paper-plane"></i>
                            </button> -->
                            <?php echo do_shortcode( '[contact-form-7 id="153" title="Form liên hệ 1"]' ); ?>
                            
                        </form>
                        
                    </div>

                </div>
            </div>

        </div>
    </div>
    <?php get_footer() ?>