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
                <li class="nav-item">
                        <a class="nav-link" href="#">Tất cả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cổ Đại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trung đại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hiện đại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Triều đại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vua-chúa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Anh hùng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Điển tích</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Truyện cười</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Viết bài</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!--  End Nav  -->

    

    