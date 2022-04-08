<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/HomePagee.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="./">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
    <div id="main">
        <!-- BEGIN HEADER -->
        <header>
            <nav>
                <div class="img-nav">
                    <img src="./img/logo-mcdonalds.png" alt="" />
                </div>
                <div class="content-nav">
                    <ul>
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="./index.php">Sản Phẩm</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Giới Thiệu</a></li>
                    </ul>
                    <form>
                        <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- The Modal -->
                <button id="cart" onclick="window.location.href='xemgiohang.php'">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    Giỏ hàng

                </button>


            </nav>

        </header>
        <!-- end HEADER -->



        <div id="slider">
            <img src="./img/vid1.jpg" id="anh_slide">
        </div>
        <script>
        SlideShow();
        </script>
        <!-- END SLIDER -->



        <!-- BEGIN CONTENT -->
        <div id="content">
            <div class="content-section">
                <!-- <div class="row"> -->
                <div class="first-img">
                    <img src="./img/1170x300-GMALpx.jpg" alt="">
                    <div class="text-content">
                        <p>Ưu đãi độc quyền & hơn thế nữa</p>
                        <h2> ỨNG DỤNG McDONALD'S</h2>
                        <a href="" class="btn-dowapp">TẢI ỨNG DỤNG</a>
                    </div>
                </div>

                <div class="row third-img">
                    <div class=" col col-half mc-cafe">
                        <a href="">
                            <img src="./img/mccafe_desktop.jpg" alt="">
                            <p class="text-mccafe">McCafe </p>
                        </a>
                        <!-- <p class="text-mccafe">sdf </p> -->
                    </div>
                    <div class="col col-half ">
                        <div class="row third-img2">
                            <div class="col col-half ">
                                <a href="">
                                    <img src="./img/home-stories.jpg" alt="">
                                    <!-- <p class="hihi">hgj</p> -->
                                </a>
                                <p class="text-img2">CÂU CHUYỆN VỀ McDONALD'S</p>
                            </div>
                            <div class="col col-half">
                                <a href="">
                                    <img src="./img/hr-pc.jpg" alt="">
                                    <!-- <p class="hihi">hgj</p> -->
                                </a>
                                <p class="text-img2">TUYỂN DỤNG</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col col-full third-img3">
                                <a href="">
                                    <img src="./img/home-banner-hamburger.jpg" alt="">
                                    <p class="text-img3">HAMBURGER <br>KHÁM PHÁ VỊ NGON LỪNG DANH</p>
                                </a>
                                <!-- <p class="hihi">hgj</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- </div> -->
            </div>

            <div class="clear"></div>
            <div class="conten-section2">
                <div class="second-img">
                    <img src="./img/MDS_banner_1600x250.jpg" alt="">
                    <div class="text-content2">
                        <h2>McDELIVERY™</h2>
                        <p>Dịch vụ giao hàng của McDonald's. Đặt hàng đơn giản, giao hàng nhanh chóng.</p>
                        <a href="">ĐẶT HÀNG NGAY</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="content-section">
                <div class="row">
                    <div class="col col-half listen">
                        <p>Nhấp vào đây để phản hồi, đánh giá dịch vụ và <br> nhận 1 phần quà từ McDonald’s</p>
                        <a href="">Chúng tôi lắng nghe bạn</a>
                    </div>
                    <div class="col col-half">
                        <form action="">
                            <div class="mt-8 mail-form">
                                <p>Nhập email <br>
                                    để nhận thông tin khuyến mãi</p><br>
                                <input type="email" placeholder="Email" class="form-control">
                                <input class="form-submit-btn mt-8" type="submit" value="SEND">
                                <!-- <p>Bằng việc nhấn gửi, bạn đã đồng ý với các Điều kiện & Điều khoản của chúng tôi.</p>                    -->
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

        </div>

        <!-- END CONTENT -->




        <!-- BEGIN FOOTER -->

        <div id="footer">
            <div class="content-section3">
                <div class="row">
                    <div class="line"></div>
                    <!-- <hr> -->
                    <div class="col col-md-3">
                        <ul>
                            <li class="parent">Tìm hiểu</li>
                            <li><a href="">Lịch sử McDonald's</a></li>
                            <li><a href="">Giới thiệu McDonald's Việt Nam</a></li>
                            <li><a href="">Xuất xứ</a></li>
                            <li><a href="">Nhà cung cấp</a></li>
                            <li><a href="">Dịch vụ</a></li>
                            <li><a href="">An toàn thực phẩm</a></li>
                        </ul>
                    </div>
                    <div class="col col-md-3">
                        <ul>
                            <li class="parent">Cơ hội nghề nghiệp</li>
                            <li><a href="">Thông tin tuyển dụng</a></li>
                            <li><a href="">Khu vực TP.HCM</a></li>
                            <li><a href="">Khu vực Hà Nội</a></li>
                        </ul>
                    </div>
                    <div class="col col-md-3">
                        <ul>
                            <li class="parent">Chính sách</li>
                            <li><a href="">Các câu hỏi thường gặp</a></li>
                            <li><a href="">Điều khoản và Điều kiện</a></li>
                            <li><a href="">Chính sách về quyền riêng tư</a></li>
                            <li>Ngôn ngữ
                                <ul>
                                    <li><a href="en/"></a></li>
                                    <li><a href="vi/"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col col-md-3">
                        <ul>
                            <li class="parent">Liên hệ với chúng tôi</li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Phản hồi chất lượng dịch vụ</a></li>
                            <a href=""><img class="social" src="./img/facebook.png" alt=""></a>
                            <a href=""><img class="social" src="./img/instagram.png" alt=""></a>
                            <a href=""><img class="social" src="./img/youtube.png" alt=""></a>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="footer1">
                <p>©2017-2018 McDonald's. All Rights Reserved.</p>
            </div>
        </div>
        <!-- end footer -->
    </div>
</body>

</html>