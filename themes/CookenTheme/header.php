<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>
<nav>
  <!-- <div class="navbar">
    <i class='bx bx-menu'></i>
    <div class="logo">
      
        <a href="<?php echo site_url() ?>"><?php the_custom_logo(); ?></a>
      
    </div>

    <div class="sidebar-logo">
      <i class='bx bx-x' ></i>
       </div> -->

      <!-- <nav class="main-navigation"> -->
        <!-- <ul class="menu-inner">
            <li class="menu-item" id="menu-1"><a class="menu-link active" href="<?php echo site_url() ?>">Trang chủ</a></li>
            <li class="menu-item" id="menu-2"><a class="menu-link" href="#">Về chúng tôi</a></li>
            <li>
                <a class="menu-link" href="#">
                  Dịch vụ
                  <i class="far fa-angle-down"></i>
                </a>
                <ul class="dropdown_menu">
                  <li class="menu-item"><a class="menu-link" href="#">Nhập khẩu</a></li>
                  <li class="menu-item"><a class="menu-link" href="#">Xuất khẩu</a></li>
                  <li class="menu-item"><a class="menu-link" href="#">Thương mại</a></li>
                  <li class="menu-item"><a class="menu-link" href="#">Sản phẩm</a></li>
                </ul>
            </li>
            <li class="menu-item" id="menu-4"><a class="menu-link" href="#">Đối tác</a></li>
            <li class="menu-item" id="menu-5"><a class="menu-link" href="#">Tin tức</a></li>
            <li class="menu-item" id="menu-6"><a class="menu-link" href="#">Liên hệ</a></li>
          
        </ul> -->

        <!-- <ul class="links">
          <li><a href="<?php echo site_url() ?>">Trang chủ</a></li>
          <li>
            <a href="#">Dịch vụ</a>
            <i class="far fa-angle-down"></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">Nhập khẩu</a></li>
              <li><a href="#">Xuất khẩu</a></li>
              <li><a href="#">Thương mại</a></li>
              <li><a href="#">Sản phẩm</a></li>
            </ul>
          </li>
          <li><a href="#">Đối tác</a></li>
          <li><a href="#">Tin tức</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      <!-- </nav> -->
    <!-- </div> -->

  <!-- </div> --> 

  <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"> <a href="<?php echo site_url() ?>"><?php the_custom_logo(); ?></a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="<?php echo site_url() ?>">Trang chủ</a></li>
          <li><a href="#">Về chúng tôi</a></li>
          <li>
            <a href="#">Dịch vụ</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="<?php echo site_url('/nhap-khau') ?>">Nhập khẩu</a></li>
              <li><a href="<?php echo site_url('/xuat-khau') ?>">Xuất khẩu</a></li>
              <li><a href="#">Thương mại</a></li>
              <li><a href="#">Sản phẩm</a></li>
            </ul>
          </li>
          <li><a href="#">Đối tác</a></li>
          <li><a href="#">Tin tức</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      </div>
      
    </div>
</nav>