<?= require "Views/frontend/layouts/header.php" ?>

<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            <div class="fh5co_suceefh5co_height"><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?php echo $data["onelastedNews"]["hinhanh"]; ?>" alt="img" /></a>
                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                <div class="fh5co_suceefh5co_height_position_absolute_font">
                    <div class=""><a href="" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $data["onelastedNews"]["date_posted"]; ?>
                        </a></div>
                    <div class=""><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>" class="fh5co_good_font"> <?php echo $data["onelastedNews"]["title"] ?> </a></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <?php foreach ($data["lastedNews"] as $item) : ?>
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        <div class="fh5co_suceefh5co_height_2"><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?php echo $item["hinhanh"]; ?>" alt="img" /></a>
                            <div class="fh5co_suceefh5co_height_position_absolute"></div>
                            <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $item["date_posted"] ?> </a></div>
                                <div class=""><a href="index.php?controller=news&action=show&id=<?= $item["id"]; ?>" class="fh5co_good_font"> <?php echo $item["title"] ?> </a></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- Phân loại danh mục Thể thao -->
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>

            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Thể thao</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            <?php foreach ($data["sportNews"] as $item) : ?>
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?= $item["hinhanh"] ?>" alt="" class="fh5co_img_special_relative" />
                    </a>
                    </div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="index.php?controller=news&action=show&id=<?= $item["id"]; ?>" class="text-white"> <?= $item["title"] ?> </a>
                            <div class="fh5co_latest_trading_date_and_name_color"> <?= $item["name"] ?> - <?= $item["date_posted"] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Phân loại danh mục công nghệ -->
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>

            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Công nghệ</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            <?php foreach ($data["techNews"] as $item) : ?>
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                        <div class="fh5co_news_img"><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?= $item["hinhanh"] ?>" alt="" />
                    </a>
                    </div>
                        <div>
                            <a href="index.php?controller=news&action=show&id=<?= $item["id"]; ?>" class="d-block fh5co_small_post_heading"><span class=""><?= $item["title"] ?></span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i> <?= $item["date_posted"] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Thêm loại danh mục kinh doanh -->
<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>

            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-black">Kinh doanh</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                <?php foreach ($data["businessNews"] as $item) : ?>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?= $item["hinhanh"] ?>" alt="" />
                        </a>
                        </div>
                            <div>
                                <a href="index.php?controller=news&action=show&id=<?= $item["id"]; ?>" class="d-block fh5co_small_post_heading"><span class=""><?= $item["title"] ?></span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> <?= $item["date_posted"] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tất cả tin tức</div>
                </div>
                <?php foreach ($data["allNews"] as $item) : ?>
                    <div class="row pb-4">
                        <div class="col-md-5">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?= $item["hinhanh"] ?>" alt="" />
                            </a>
                            </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box">
                            <a href="index.php?controller=news&action=show&id=<?= $item["id"]; ?>" class="fh5co_magna py-2"> <?= $item["title"] ?> </a>
                            <br />
                            <a href="single.html" class="fh5co_mini_time py-3"> <?= $item["name"] ?> </a>
                            <div class="fh5co_consectetur"> <?= substr($item["content"], 0, 200) . "..." ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Danh mục</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php foreach ($data["categoryName"] as $name) : ?>
                        <a href="#" class="fh5co_tagg"><?= $name["name"] ?></a>
                    <?php endforeach; ?>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin tức phổ biến</div>
                </div>
                <?php foreach ($data["allNews2"] as $item) : ?>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <a href="index.php?controller=news&action=show&id=<?= $data["onelastedNews"]["id"] ?>"> <img src="public/images/<?= $item["hinhanh"] ?>" alt="img" class="fh5co_most_trading" /></a>
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> <?= $item["title"] ?></div>
                            <div class="most_fh5co_treding_font_123"> <?= $item["date_posted"] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Trang trước</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Trang sau <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
            </div>
        </div>
    </div>
</div>

<?= require "Views/frontend/layouts/footer.php" ?>
