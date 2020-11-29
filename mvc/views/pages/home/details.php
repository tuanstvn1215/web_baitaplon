<link rel="stylesheet" href='<?= host ?>/public/css/home/detail.css'>
<div class="container">
    <div class="details">
        <div class="details-left">
            <div class="small-img">
                <?php for ($i = 0; $i < count($data['Produce']['Hinh']); $i++) : ?>
                    <div class="small-img-item"> <img onmouseover="change_img(event)" class="small-img-item-inner" src="<?= host . $data['Produce']['Hinh'][$i] ?>" alt="">
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="details-center">
            <div class="img"><img id='main_img' src="<?= host . $data['Produce']['Hinh'][0] ?>" alt=""></div>
        </div>
        <div class="details-right">
            <div class="content-header">
                <div class="produce-title">
                    <?= $data['Produce']['TenHH'] ?>
                </div>
                <div class="produce-price">
                    <?= $data['Produce']['Gia'] ?>
                </div>
            </div>
            <div class="content-main">

                <div class="content-describes">
                    <ul class="content-describes-item">
                        <?php for ($i = 0; $i < count($data['Produce']['MoTaHH']); $i++) : ?>
                            <li><?= $data['Produce']['MoTaHH'][$i] ?></li>
                        <?php endfor ?>
                    </ul>
                </div>
            </div>

            <div class="content-buttons">
                <div class="Produce-number">
                    <div class="span">
                        <div onclick="Produce_number_minus()" id="Produce-number--">-</div>
                    </div>
                    <input class="number" type="number" name="Produce-number" id="Produce-number" min="0">
                    <div class="span">
                        <div onclick="Produce_number_plus()" id="Produce-number-+">+</div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            function Produce_number_minus() {
                let Produce_number = document.getElementById('Produce-number')
                if (!(Produce_number.value = parseInt(Produce_number.value) - 1))
                    Produce_number.value = 1
            }

            function Produce_number_plus() {

                let Produce_number = document.getElementById('Produce-number')
                if (!(Produce_number.value = parseInt(Produce_number.value) + 1))
                    Produce_number.value = 1

            }

            var images = document.getElementsByClassName('small-img-item-inner')

            function change_img(e) {
                e.target.getAttribute('src')
                var main_img = document.getElementById('main_img')
                main_img.setAttribute('src', e.target.getAttribute('src'))
            }
        </script>

    </div>