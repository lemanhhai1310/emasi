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
        <div class="uk-child-width-1-4@l item__67-40" uk-grid>
            <?php
            $data = array(
                array(
                    'img' => 'images/HD_R1230.png',
                    'title' => 'Chương trình Mẫu Giáo',
                    'desc' => '',
                ),
                array(
                    'img' => '',
                    'title' => 'Chương trình Tiểu học',
                    'desc' => '',
                ),
                array(
                    'img' => '',
                    'title' => 'Chương trình THCS',
                    'desc' => '',
                ),
                array(
                    'img' => '',
                    'title' => 'Chương trình THPT',
                    'desc' => '',
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>