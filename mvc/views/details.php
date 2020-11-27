<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script>
    </script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>

<body>
    <link rel="stylesheet" href="index.css">
    <div class="header container-fluid">
        <div class="header-top container ">
            <div class="header-top-right">
                <a href="#">Đăng Kí</a>
                <a href="#">Đăng Nhập</a>
            </div>
            <div class="header-top-right">
                <a class="header-top-right-item" href="#">Đăng Kí</a>
                <a class="header-top-right-item" href="#">Đăng Nhập</a>
            </div>

        </div>
        <nav class="navbar navbar-expand navbar-dark header-bottom container">
            <a class="nav-item"><img class="pic" src="picture/shop.svg"></a>
            <form class="nav-item search-form-warp" method="get">
                <div class="search-form">
                    <input class="search-input" type="text">
                    <button class="search-img-warp">
                        <img class="search-img" src="picture/searchpng.png">
                    </button>

                </div>

            </form>
            <img style="width: 30px;" class="nav-item" src="picture/cart.png">
        </nav>
    </div>
    <div class="main">
        <div class="promotion ">
            <div class="col-12 col-md-8 promotion-left">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-1 active">

                        </div>
                        <div class="carousel-item carousel-item-2">

                        </div>
                        <div class="carousel-item carousel-item-3">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 promotion-right">
                <div class="promotion-right-item">

                </div>
                <div class="promotion-right-item">

                </div>
            </div>
        </div>

        <div>
            <div class="category">
                <div class="col-2 category-col">
                    <div class="category-item">
                        <div class="category-item-description">
                            adsa
                        </div>
                        <img class="category-item-img" src="Capture.PNG" alt="">
                    </div>
                    <div class="category-item">
                        <div class="category-item-description">
                            adsa
                        </div>
                        <img class="category-item-img" src="Capture.PNG" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="row">
                <?php for ($i = 0; $i < count($hanghoa); $i++) { ?>
                    <div class="col-2">
                        <a href=".chitiethanghoa/dd" class="products-item">
                            <img class="products-item-img" src="' . $hanghoa[$i]['Hinh'] . '" alt="">
                            <p>
                                ' . $hanghoa[$i]['MoTaHH'] . '
                                <!-- 26 chữ -->
                            </p>
                            <div>
                                <div class="products-item-price">
                                    ' . $hanghoa[$i]['Gia'] . '
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>

        <div class="footer container">

        </div>
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>