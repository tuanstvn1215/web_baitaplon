<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script>
    </script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>

</head>

<body>
    <link rel="stylesheet" href='/B1704786/public/css/home.css'>
    <div class="header container-fluid">
        <div class="header-top container ">
            <div class="header-top-right">
                <a href="#">Tuấn B1704786</a>
            </div>
            <div class="header-top-right">
                <?php
                if (isset($_SESSION['MSKH']) || isset($_SESSION['MSVN'])) {
                    require_once('./mvc/views/pages/block/Infomation.php');
                } else {
                    require_once('./mvc/views/pages/block/loginlink.php');
                }
                ?>
            </div>

        </div>
        <nav class="navbar navbar-expand navbar-dark header-bottom container">
            <a class="nav-item"><img class="pic" src="<?= host ?>/public/picture/shop.svg"></a>
            <form class="nav-item search-form-warp" method="get">
                <div class="search-form">
                    <input class="search-input" type="text">
                    <button class="search-img-warp">
                        <img class="search-img" src="<?= host ?>public/picture/searchpng.png">
                    </button>
                </div>
            </form>
            <img style="width: 30px;" class="nav-item" src="<?= host ?>public/images/icon/cart.png">
        </nav>
    </div>
    <div class="content">
        <?php
        require_once('./mvc/views/pages/home/' . $data['page'] . '.php')
        ?>
    </div>
    <footer class="contain_fluid bg_footer">
        <div class="container">

            <div class="about_footer">
                <div class="footer_title">
                    <p>VỀ CHÚNG TÔI</p>
                </div>
                <p>Nếu bạn đang tìm kiếm một trang web để mua và bán hàng trực tuyến thì chúng tôi là một sự lựa chọn hiệu quả dành cho bạn. Bản chất của Shopee là một social ecommerce platform - nền tảng trang web thương mại điện tử tích hợp mạng xã hội</p>
                <div class="footer_title">
                    <p>MẠNG XÃ HỘI</p>
                </div>
                <ul>
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-instagram"></i></li>
                </ul>
            </div>
            <div class="info">
                <div class="footer_title">
                    <p>THANH TOÁN</p>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Signin</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="ourwork">
                <div class="footer_title">
                    <p>DANH MỤC HÀNG</p>
                </div>
                <ul>
                    <li><img src="images/img_project_1.png"></li>
                    <li><img src="images/img_project_2.png"></li>
                    <li><img src="images/img_project_3.png"></li>
                    <li><img src="images/img_project_4.png"></li>
                    <li><img src="images/img_project_5.png"></li>
                    <li><img src="images/img_project_6.png"></li>
                    <li><img src="images/img_project_7.png"></li>
                    <li><img src="images/img_project_8.png"></li>
                    <li><img src="images/img_project_2.png"></li>
                </ul>
            </div>
            <div class="contact">
                <div class="footer_title">
                    <p>LIÊN HỆ</p>
                </div>
                <div class="contact_content">
                    <div class="contact_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="contact_details">
                        <h4>Số điện thoại</h4>
                        <p>+84 899016864</p>
                    </div>
                    <div class="contact_icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact_details">
                        <h4>Địa chỉ Email</h4>
                        <p>tuanb1704786@gmail.com</p>
                    </div>
                    <div class="contact_icon">
                        <i class="fa fa-location-arrow"></i>
                    </div>
                    <div class="contact_details">
                        <h4>Địa chỉ</h4>
                        <p>Cần Thơ</p>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>