<style>
    .info-warpper {
        color: gray;
        top: 30px;
        right: 0px;
        position: absolute;
        background-color: white;
        height: 300px;
        width: 200px;
        z-index: 1;
        box-shadow: 0px 0px 5px 0px grey;
        transition: width 50ms, height 50ms;

    }

    .info-warpper-hidden {
        top: 30px;
        right: 0px;
        position: absolute;
        background-color: white;
        height: 0px;
        width: 0px;
        z-index: 1;
        transition: width 50ms, height 50ms;
    }

    .info-item-hidden {
        transition: transform 50ms;
        transform: scale(0);
    }

    .info-item {
        transition: transform 50ms;
        transform: scale(1);
    }

    #info-icon {
        text-align: right;
        width: 200px;
        height: 50px;

    }

    #info-icon :hover {
        cursor: pointer;
    }

    .fa-user {
        font-size: larger;
    }

    .info-container {
        display: flex;
        flex-direction: row;
    }
</style>
<div class="info-container">

    <p id='info-icon' onclick="info_warpper_hidden()">
        <!-- <span>
            <?php if (isset($data['user']['HoTenKH'])) {
                echo $data['user']['HoTenKH'];
            } else {
                echo $data['user']['HoTenNV'];
            } ?>
        </span> -->
        <i class="fas fa-user"></i>
        <!-- </p> -->
        <div id='info-warpper' class="info-warpper-hidden">
            <div id='info-item' class="info-item-hidden">
                <div>
                    <p><span> <?php if (isset($data['user']['HoTenKH'])) : ?>
                                <span>Xin chào khách hàng</span>
                            <?php else : ?>
                                <span>Xin chào nhân viên</span>
                            <?php endif ?>
                        </span>
                    </p>
                </div>
                <div>
                    <p>
                        <span> <?php if (isset($data['user']['HoTenKH'])) {
                                    echo $data['user']['HoTenKH'];
                                } else {
                                    echo $data['user']['HoTenNV'];
                                } ?>
                        </span>
                    </p>
                </div>

                <div>
                    <p><span>Thông tin</span></p>
                </div>
                <div>
                    <p>
                        <span>
                            Đăng Xuất
                        </span>
                    </p>
                </div>
            </div>
        </div>
</div>

<script>
    var info_icon = document.getElementById('info-icon');
    var info_warpper = document.getElementById('info-warpper');
    var info_item = document.getElementById('info-item');

    function info_warpper_hidden() {
        if (info_warpper.classList.contains('info-warpper')) {
            info_warpper.classList.replace('info-warpper', 'info-warpper-hidden')
            info_item.classList.replace('info-item', 'info-item-hidden')

        } else {
            info_warpper.classList.replace('info-warpper-hidden', 'info-warpper')
            info_item.classList.replace('info-item-hidden', 'info-item')


        }
    }
</script>