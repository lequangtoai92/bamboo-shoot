<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : 'Facilio'; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>dist/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>css/style.css" />
    <?php
      if (isset($stylesheet))
        echo '<link rel="stylesheet" href="' . base_url() . 'css/' . $stylesheet . '.css" />'
    ?>
</head>

<body>
    <div class="container">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  data-toggle="modal" data-target="#md_login">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng ký</a>
                    </li>

                </ul>
            </div>
        </nav> -->
        <nav class="navbar navbar-light justify-content-between navbar-one" style="background-color: #e3f2fd;">
            <a class="navbar-brand title-name">MĂNG NON</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                <div>
                    <a class="nav-link" data-toggle="modal" data-target="#md_dialog" href="#">Đăng nhập</a>
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
                            <a class="dropdown-item" href="#">Mầm</a>
                            <a class="dropdown-item" href="#">Chồi</a>
                            <a class="dropdown-item" href="#">Lá</a>
                            <a class="dropdown-item" href="#">Măng non</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cổ tích Việt Nam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cổ tích Nhật Bản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Truyện cổ Grimm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thần thoại Hi Lạp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ca dao - tục ngữ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vè</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Truyện cười</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--  End Nav  -->

    

    