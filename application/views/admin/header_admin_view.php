<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Facilio'; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>html/dist/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>html/css/style.css" />
    <?php
      if (isset($stylesheet))
        echo '<link rel="stylesheet" href="' . base_url() . 'html/css/' . $stylesheet . '.css" />'
    ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2238283566497298&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="container">
        <nav class="navbar navbar-light justify-content-between navbar-one" style="background-color: #e3f2fd;">
            <a class="navbar-brand title-name" href="<?php echo base_url() . 'home' ?>">MĂNG NON</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuInfo" data-toggle="dropdown" aria-haspopup="true" >
                            <?php echo ($this->session->userdata('B_LOGIN')['AL150']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuInfo">
                            <a class="dropdown-item" href="<?php echo base_url() . 'account' ?>">Thông tin</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'account' ?>">Bài viết</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'account' ?>">Tin nhắn</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'admin' ?>">Quản lý</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'creat' ?>">Viết bài</a>
                            <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'logout' ?>">Đăng xuất</a>
                        </div>
                    </li>
                </div>
            </form>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-two">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown3" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown3">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" >
                            Giáo dục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url() . 'man' ?>">Mầm</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'choi' ?>">Chồi</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'la' ?>">Lá</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'mang_non' ?>">Măng non</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'cotich_vietnam' ?>">Cổ tích Việt Nam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'cotich_nhatban' ?>">Cổ tích Nhật Bản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'truyenco_grimm' ?>">Truyện cổ Grimm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'thanthoai_hilap' ?>">Thần thoại Hi Lạp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'cagiao_tucngu' ?>">Ca dao - tục ngữ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'gnomic' ?>">Vè</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'truyencuoi' ?>">Truyện cười</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--  End Nav  -->

    

    