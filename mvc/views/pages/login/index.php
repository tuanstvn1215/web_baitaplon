<link rel="stylesheet" href="<?= host ?>/public/css/login/index.css">
<div class="warp">
    <form class="form" action="<?= host ?>/login/postLogin" method="POST" enctype="multipart/form-data">
        <div class="form-title">
            Đăng Nhập
        </div>
        <div class="form-item">
            <input type="text" placeholder="Tài khoản" name="MSKH">
        </div>
        <div class="form-item">
            <input type="password" name="MatKhau" placeholder="Mật khẩu" id="">
        </div>
        <div class="form-item">
            <button type="submit">Đăng nhập</button>
        </div>
    </form>

</div>