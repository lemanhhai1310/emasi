<?php $projectName = "Emasi"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.27/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.27/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.27/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<header class="header" uk-sticky>
    <nav class="header__top uk-navbar-container">
        <div class="uk-container uk-container-large">
            <div uk-navbar>
                <div class="uk-navbar-right">
                    <a href="tel:1800599918" class="uk-navbar-item header__top__phone uk-light uk-visible@s">
                        <span uk-icon="icon: receiver; ratio: 1"></span>
                        1800 599 918
                    </a>
                    <div>
                        <a class="uk-navbar-toggle" href uk-search-icon></a>
                        <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !.uk-navbar; flip: false">

                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search" aria-label="Search" autofocus>
                                    </form>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-drop-close" href="#" uk-close></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="uk-navbar-item">
                        <a href="" class="header__top__btn uk-button uk-button-small uk-button-primary uk-border-pill">Đăng ký tư vấn</a>
                    </div>
                    <div class="uk-navbar-item header__top__lang">
                        <span>VI</span>
                        |
                        <a href="">EN</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="header__bottom uk-navbar-container">
        <div class="uk-container uk-container-large">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item uk-logo"><img src="images/logo_h.png" alt=""></a>
                </div>
                <div class="uk-navbar-right">
                    <a class="uk-navbar-toggle uk-hidden@l" href="#">
                        <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
                    </a>
                    <ul class="uk-navbar-nav uk-visible@l">
                        <li class="uk-active"><a href="#">EMASI</a></li>
                        <li>
                            <a href="#">Chương trình <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Học sinh</a></li>
                                    <li><a href="#">Cộng đồng</a></li>
                                    <li><a href="#">Tuyển sinh</a></li>
                                    <li><a href="#">Cơ sở</a></li>
                                    <li><a href="#">Academy</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Học sinh</a></li>
                        <li><a href="#">Cộng đồng</a></li>
                        <li><a href="#">Tuyển sinh</a></li>
                        <li><a href="#">Cơ sở</a></li>
                        <li><a href="#">Academy</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>