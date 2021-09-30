<?php get_header(); 

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
                    <div class="px-3">
                        <?php 
                        
                        
                        $news = new WP_Query(array(
                            //'posts_per_page' => 1,
                            'posts_type' => 'posts',
                        ));
                        // echo $GLOBALS['wp_query']->have_posts(  );
                        while($news->have_posts()){
                            $news->the_post(  ); ?>
                            <div class="row mb-4">
                            <div class="col-md-5 col-sm-12">
                                <a href="<?php the_permalink() ?>"
                                    title="3 Cách thưởng thức thịt heo muối Iberico." rel="nofollow" target="_blank">
                                    <div class="news-images img-hover-zoom--colorize">
                                        <!-- <img src="https://cookentrading.com.vn/wp-content/uploads/2021/06/4-1-1.png.webp"
                                            alt=""> -->
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
                        
                        <?php 
                        }
                        ?>
                       

                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <!-- search -->
                    <div class="news-search mb-5">
                        <form class="form-inline h-100">
                            <input class="form-control h-100 f-1 border-radius-left" type="search"
                                placeholder="Tìm kiếm…" aria-label="Search">
                            <button class="btn my-2 my-sm-0 h-100 border-radius-right btn-search">
                                <i class="fa fa-search fa-lg p-3" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <!-- end search -->
                    <!-- bài viết nổi bật -->
                    <div class="ahihi">
                        <span class="ml-3"><span class="font-weight-bold">Bài Viết Nổi Bật</span>
                            <ul>
                                <li>
                                    <div class="ml-3 mt-2 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="https://cookentrading.com.vn/wp-content/uploads/2021/06/4-1-1-150x150.png"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <a class="text-decoration-none text-dark" style="text-decoration: none"
                                                href="https://cookentrading.com.vn/2021/06/24/3-cach-thuong-thuc-thit-heo-muoi-iberico/"
                                                title="3 Cách thưởng thức thịt heo muối Iberico.">3 Cách thưởng thức
                                                thịt heo muối Iberico.</a>
                                        </div>
                                </li>
                                <li>
                                    <div class="ml-3 mt-4 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="https://cookentrading.com.vn/wp-content/uploads/2021/05/Image-Placeholder-2.png"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <a class="text-decoration-none text-dark" style="text-decoration: none"
                                                href="https://cookentrading.com.vn/2021/06/24/3-cach-thuong-thuc-thit-heo-muoi-iberico/"
                                                title="3 Cách thưởng thức thịt heo muối Iberico.">Kích ứng dạ dày ruột – Cách giảm triệu chứng chỉ trong 10 phút</a>
                                        </div>
                                </li>
                                <li>
                                    <div class="ml-3 mt-4 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="https://cookentrading.com.vn/wp-content/uploads/2021/05/Image-Placeholder-2.png"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <a class="text-decoration-none text-dark" style="text-decoration: none"
                                                href="https://cookentrading.com.vn/2021/06/24/3-cach-thuong-thuc-thit-heo-muoi-iberico/"
                                                title="3 Cách thưởng thức thịt heo muối Iberico.">Kích ứng dạ dày ruột – Cách giảm triệu chứng chỉ trong 10 phút</a>
                                        </div>
                                </li>
                                <li>
                                    <div class="ml-3 mt-4 d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="https://cookentrading.com.vn/wp-content/uploads/2021/05/Photo-3.png"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <a class="text-decoration-none text-dark" style="text-decoration: none"
                                                href="https://cookentrading.com.vn/2021/06/24/3-cach-thuong-thuc-thit-heo-muoi-iberico/"
                                                title="3 Cách thưởng thức thịt heo muối Iberico.">Top 5 mặt nạ tốt nhất cho mùa hè nóng nực</a>
                                        </div>
                                </li>
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
                            <input class="form-control border-radius-left form-control-lg" type="search"
                                placeholder="Điền email bạn sử dụng thường xuyên" aria-label="Search">
                            <button class="btn my-2 my-sm-0 border-radius-right btn-search form-control-lg">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <?php get_footer() ?>