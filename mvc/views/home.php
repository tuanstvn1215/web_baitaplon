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


</head>

<body>
    <link rel="stylesheet" href='./public/css/home.css'>
    <div class="header container-fluid ">
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
    <div class="content">
        <?php
        require_once('./mvc/views/pages/home/index.php')
        ?>
    </div>
    <div class="footer container">

    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>