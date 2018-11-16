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
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng ký</a>
                    </li>

                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-light justify-content-between" style="background-color: #e3f2fd;">
            <a class="navbar-brand">VIẾT TRUYỆN</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown3" aria-controls="navbarNavDropdown"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown3">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" >
                            Thể loại
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Truyện tình cảm</a>
                            <a class="dropdown-item" href="#">Ngôn tình</a>
                            <a class="dropdown-item" href="#">Truyện phưu lưu</a>
                            <a class="dropdown-item" href="#">Truyện trinh thám</a>
                            <a class="dropdown-item" href="#">Nhật ký</a>
                            <a class="dropdown-item" href="#">Truyện kinh dị</a>
                            <a class="dropdown-item" href="#">Truyện xã hội</a>
                            <a class="dropdown-item" href="#">ký sự</a>
                            <a class="dropdown-item" href="#">Truyện cổ tích</a>
                            <a class="dropdown-item" href="#">Truyện thiếu nhi</a>
                            <a class="dropdown-item" href="#">Truyện theo chủ đề</a>
                            <a class="dropdown-item" href="#">Thể loại khác</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tâm sự</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Song ngữ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Truyện cười</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Status</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Funfact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thơ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin mới</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--  End Nav  -->

    

    