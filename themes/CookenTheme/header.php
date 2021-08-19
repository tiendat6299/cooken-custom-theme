<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <?php wp_head(); ?>
  
</head>

<body <?php body_class(); ?>>
  <div class="header-wrap">
    <div class="logo">
      <h1 class="school-logo-text float-left">
        <a href="<?php echo site_url() ?>"><?php the_custom_logo(); ?></a>
      </h1>
    </div>

    <div class="menu">
      <nav class="main-navigation">
        <ul id="menu">
        <li id="menu-1"><a href="<?php echo site_url() ?>">Trang chủ</a></li>
        <li id="menu-2"><a href="#">Về chúng tôi</a></li>
        <li>
            <a href="#">
              Dịch vụ
              <i class="far fa-angle-down"></i>
            </a>
            <ul class="dropdown_menu">
              <li><a href="#">Nhập khẩu</a></li>
              <li><a href="#">Xuất khẩu</a></li>
              <li><a href="#">Thương mại</a></li>
              <li><a href="#">Sản phẩm</a></li>
            </ul>
        </li>
        <li id="menu-4"><a href="#">Đối tác</a></li>
        <li id="menu-5"><a href="#">Tin tức</a></li>
        <li id="menu-6"><a href="#">Liên hệ</a></li>
          
        </ul>
      </nav>
    </div>

  </div>
  </header>