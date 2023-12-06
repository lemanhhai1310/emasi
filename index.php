<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push;">

    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300; offset-top: true; offset-bottom: true">
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                <img src="images/slider.png" alt="" uk-cover>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                <img src="images/slider.png" alt="" uk-cover>
            </div>
        </li>
        <li>
            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-left">
                <img src="images/slider.png" alt="" uk-cover>
            </div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<div class="home__section1">
    <div class="uk-container uk-container-large uk-container-expand-right">
        <div class="uk-grid-106-l uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-section-small" uk-toggle="cls: uk-section-small; mode: media; media: @l">
                    <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-1-3 uk-width-auto@s">
                            <img src="images/logo1.png" alt="">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="home__section1__title">Hệ thống trường song ngữ quốc tế EMASI tiên phong kiến tạo thế hệ học sinh hạnh phúc và toàn diện</h3>
                        </div>
                    </div>
                    <div class="home__section1__desc uk-margin-medium-top">Thông qua hệ thống cơ sở vật chất chuẩn quốc tế; lộ trình học tập tích hợp tinh hoa từ chương trình phổ thông Cambridge và chương trình quốc gia được truyền tải bằng phương pháp giáo dục tối ưu trên thế giới.</div>
                </div>
            </div>
            <div class="uk-width-auto@l">
                <div class="home__section1__video">
                    <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1516" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section home__section2">
    <div class="uk-container uk-container-large uk-position-relative uk-position-z-index">
        <h1 class="home__title" style="color: #4e4e4e;">Title cho Mấy điểm nổi bật/h1</h1>
        <div class="item__94-40 uk-child-width-1-2@l uk-grid-collapse uk-grid-match" uk-grid uk-height-match="target: .mybox">
            <div>
                <div class="uk-grid-collapse uk-grid-match uk-child-width-1-1" uk-grid>
                    <div>
                        <div class="uk-child-width-1-2 uk-grid-match uk-grid-collapse" uk-grid>
                            <div>
                                <div class="uk-cover-container mybox">
                                    <img src="images/HD_R1713.png" alt="" uk-cover="">
                                    <canvas width="359" height="359"></canvas>
                                </div>
                            </div>
                            <div>
                                <div class="home__section2__card uk-card uk-card-body uk-card-default mybox">
                                    <img class="uk-visible@m" src="images/Layer15.png" alt="">
                                    <h4 class="home__section2__card__title" style="color: #57cbf5;">Phương pháp giáo dục truyền cảm hứng</h4>
                                    <div class="home__section2__card__desc">Đội ngũ sư phạm đa quốc tịch, giàu chuyên môn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-child-width-1-2 uk-grid-match uk-grid-collapse" uk-grid>
                            <div>
                                <div class="home__section2__card home__section2__card--primary uk-card uk-card-body uk-card-primary uk-background-norepeat uk-background-bottom-right mybox" data-src="images/Layer13copy.png" uk-img>
                                    <h4 class="home__section2__card__title">Trường Quốc tế Cambridge</h4>
                                    <div class="home__section2__card__desc">Hành trình học tập song ngữ: Phổ thông Cambridge, IGCSE, A Level</div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-cover-container mybox">
                                    <img src="images/HD_R1386.png" alt="" uk-cover="">
                                    <canvas width="359" height="359"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-child-width-1-2 uk-grid-collapse uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-child-width-1-1 uk-grid-match uk-grid-collapse" uk-grid>
                            <div>
                                <div class="uk-cover-container mybox">
                                    <img src="images/HD_R0362.png" alt="" uk-cover="">
                                    <canvas width="359" height="359"></canvas>
                                </div>
                            </div>
                            <div>
                                <div class="home__section2__card uk-card uk-card-body uk-card-default mybox">
                                    <img class="uk-visible@m" src="images/Layer16.png" alt="">
                                    <h4 class="home__section2__card__title" style="color: #c1d839;">Đề cao sự phát triển toàn diện</h4>
                                    <div class="home__section2__card__desc">Chú trọng năng lực thể chất và nghệ thuật</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-cover-container">
                            <img src="images/HD_R1990.png" alt="" uk-cover="">
                            <canvas width="359" height="712"></canvas>
                            <div class="home__section2__card1 uk-card uk-card-body uk-position-bottom uk-background-norepeat">
                                <h4 class="home__section2__card__title" style="color: #ffd200;">Cơ sở vật chất ưu việt tạo trải nghiệm vượt trội / h4</h4>
                                <div class="home__section2__card1__desc">Môi trường sáng tạo, tích hợp công nghệ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-background-muted">
    <div class="uk-container uk-container-large">
        <h1 class="home__title uk-text-center" style="color: #005d83;">Chương trình Đào tạo</h1>
        <div class="item__37-20 uk-flex-center" uk-grid>
            <div class="uk-width-auto">
                <div class="home__section3__desc">Học sinh EMASI được trang bị nền tảng vững chắc về kiến thức, kỹ năng lẫn thể chất và tinh thần để trở thành các công dân toàn cầu</div>
            </div>
        </div>
        <div class="uk-flex-center item__28-15" uk-grid>
            <div class="uk-width-auto">
                <div class="home__section3__line uk-background-norepeat uk-background-center-center uk-background-contain" data-src="images/Layer88_line.png" uk-img></div>
            </div>
        </div>
        <div class="uk-child-width-1-4@l item__67-40 uk-grid-small uk-grid-26-l" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'images/HD_R1230.png',
                    'title' => 'Chương trình Mẫu Giáo',
                    'color' => '#ffd200',
                ),
                array(
                    'img' => 'images/photo.jpg',
                    'title' => 'Chương trình Tiểu học',
                    'color' => '#c1d839',
                ),
                array(
                    'img' => 'images/HD_R1013.png',
                    'title' => 'Chương trình THCS',
                    'color' => '#57cbf5',
                ),
                array(
                    'img' => 'images/HD_R2232.png',
                    'title' => 'Chương trình THPT',
                    'color' => '#005d83',
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div>
                <div class="uk-card uk-card-default home__section3__card uk-inline-clip uk-transition-toggle" style="--color: <?= $v['color'] ?>">
                    <div class="uk-cover-container home__section3__card__coverimg">
                        <img src="<?= $v['img'] ?>" alt="" uk-cover="">
                        <canvas width="341" height="246"></canvas>
                    </div>
                    <h4 class="uk-text-center home__section3__card__title"><?= $v['title'] ?></h4>
                    <div class="uk-card-body uk-text-center home__section3__card__body">
                        <img src="images/Layer8.png" alt="">
                    </div>
                    <div class="home__section3__card__overlay uk-light uk-flex uk-flex-column uk-transition-slide-bottom uk-position-cover">
                        <div class="uk-flex-auto uk-overlay">
                            <h4 class="home__section3__card__title1"><?= $v['title'] ?></h4>
                            <div class="home__section3__card__content1">
                                Chương trình Bộ GD&ĐT Việt Nam
                                Chương trình Tiểu học Quốc tế Cambridge:  Toàn cầu, Tiếng Anh, Toán học, Quan điểm, Công nghệ Thông tin (ICT), Âm nhạc, Hội hoạ, Giáo dục Thể chất,...

                                Chương trình Thư viện

                                Chứng chỉ tiếng Anh Cambridge Flyers
                            </div>
                        </div>
                        <a href="" class="home__section3__card__link uk-link-toggle">Tìm hiểu thêm >>></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="home__section4 uk-section uk-light uk-background-norepeat uk-background-bottom-center" data-src="images/Layer17.png" uk-img>
    <div class="uk-container uk-container-large">
        <h1 class="home__title uk-text-center" style="color: #fff;">Điểm đến Đại học</h1>
        <div class="item__37-20 uk-flex-center" uk-grid>
            <div class="uk-width-auto">
                <div class="home__section3__desc">Với nền tảng năng lực đúc kết qua chương trình IGCSE, Advanced Placement và A Level cùng sự hỗ trợ sâu sát từ Chuyên viên Tư vấn Học đường, học sinh các khoá tốt nghiệp tại EMASI đạt được thành tích học thuật nổi trội, tự tin theo đuổi nguyện vọng và trúng tuyển vào nhiều trường đại học danh giá hành đầu thế giới.</div>
            </div>
        </div>
        <div class="uk-flex-center item__28-15" uk-grid>
            <div class="uk-width-auto">
                <div class="home__section3__line uk-background-norepeat uk-background-center-center uk-background-contain" data-src="images/Layer87.png" uk-img></div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container uk-container-large">
        <h1 class="home__title" style="color: #005d83;">Chia sẻ của Phụ huynh Học sinh & Giáo viên</h1>

        <div class="uk-slider-container-offset item__67-40" uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid">
                    <?php for ($i=1;$i<=6;$i++): ?>
                        <li>
                            <div class="home__chiase__card uk-card uk-card-default uk-text-center uk-inline-clip uk-transition-toggle uk-display-block">
                                <div class="uk-cover-container">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="466" height="394"></canvas>
                                    <div class="home__chiase__card__overlay uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                        <div>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.”</div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <div class="home__chiase__name">Ms. Nguyễn Thị Phụ Huynh</div>
                                    <div class="home__chiase__txt">Phụ huynh em Lê Văn Học Sinh - Lớp 1E</div>
                                </div>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>

<div class="uk-section-large uk-light home__hethong">
    <div class="uk-position-cover home__hethong__overlay"></div>
    <div class="uk-container uk-container-large uk-position-relative uk-position-z-index">
        <h1 class="uk-text-center home__hethong__title">
            Hệ thống các trường EMASI <br class="uk-visible@s">
            Tại Việt Nam
        </h1>
        <div class="item__110-40 uk-grid-small uk-grid-19-l uk-child-width-1-3@l" uk-grid uk-height-match="target: .home__hethong__box">
            <div>
                <div class="uk-card uk-card-body uk-text-center home__hethong__box" style="border-color: #bed530;">
                    <img src="images/Layer47.png" alt="">
                    <h4 class="home__hethong__name">EMASI NAM LONG</h4>
                    <ul class="uk-list home__hethong__list">
                        <li><span class="uk-margin-small-right" uk-icon="icon: mail"></span>namlong@emasi.edu.vn</li>
                        <li><span class="uk-margin-small-right" uk-icon="icon: location"></span>No. 147 Street No.8, Nam Long Residential Area, Tan Thuan Dong Ward, District 7, Ho Chi Minh City, Vietnam</li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="uk-cover-container home__hethong__box" style="border-color: #bed530;">
                    <img src="images/photo.jpg" alt="" uk-cover="">
                    <canvas width="467" height="354"></canvas>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-text-center home__hethong__box" style="border-color: #c423c4;">
                    <img src="images/Layer56.png" alt="">
                    <h4 class="home__hethong__name">EMASI PLUS WATERPOINT</h4>
                    <ul class="uk-list home__hethong__list">
                        <li><span class="uk-margin-small-right" uk-icon="icon: mail"></span>namlong@emasi.edu.vn</li>
                        <li><span class="uk-margin-small-right" uk-icon="icon: location"></span>No. 147 Street No.8, Nam Long Residential Area, Tan Thuan Dong Ward, District 7, Ho Chi Minh City, Vietnam</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="uk-section">
    <div class="uk-container uk-container-large">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <h1 class="home__title" style="color: #4e4e4e;">Tin tức & Sự kiện</h1>
                <div class="uk-slider-container-offset item__28-15" uk-slider>

                    <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                            <?php for ($i=1;$i<=6;$i++): ?>
                            <li>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-cover-container">
                                        <img src="images/photo.jpg" alt="" uk-cover="">
                                        <canvas width="463" height="255"></canvas>
                                    </div>
                                    <div class="uk-card-body home__tintuc__body">
                                        <h3 class="uk-card-title home__tintuc__name"><a href="">Lorem ipsum dolor sit amet, consecte Lorem ipsum dolor sit amet</a></h3>
                                        <p class="home__tintuc__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                </div>
                            </li>
                            <?php endfor; ?>
                        </ul>

                        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

                    </div>

                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                </div>
            </div>
            <div class="uk-width-1-3@l">
                <div class="uk-card uk-card-body uk-card-primary home__tintuc__box">
                    <?php for ($i=1;$i<=4;$i++): ?>
                    <div class="home__tintuc__item">
                        <div class="uk-flex-middle uk-grid-medium" uk-grid>
                            <div class="uk-width-auto">
                                <div class="home__tintuc__item__date1">22</div>
                                <div class="home__tintuc__item__date2">Sep 2023</div>
                            </div>
                            <div class="uk-width-expand">
                                <h5 class="home__tintuc__item__title"><a href="" class="uk-link-toggle">Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur dolor sit</a></h5>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>