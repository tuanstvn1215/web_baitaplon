<link rel="stylesheet" href='./public/css/home/index.css'>
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

        <?php
        for ($i = 0; $i < count($data['AllProduce']); $i++) {
            echo '<div class="col-2">
                            <a href=".chitiethanghoa/dd" class="products-item">
                                <img class="products-item-img" src="' . $data['AllProduce'][$i]['Hinh'] . '" alt="">
                                <p>
                                ' . $data['AllProduce'][$i]['MoTaHH'] . '
                                    <!-- 26 chữ -->
                                </p>
                                <div>
                                    <div class="products-item-price">
                                        ' . $data['AllProduce'][$i]['Gia'] . '
                                    </div>
                                </div>
                            </a>
                        </div>';
        }
        ?>

    </div>
</div>