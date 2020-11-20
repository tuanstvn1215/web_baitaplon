<link rel="stylesheet" href="<?= host ?>/public/css/login/index.css">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
</head>

<div class="signup">

    <img src="<?= host ?>/public/images/picture/promotion/1.png" alt="" class="signup-image">

    <div class="signup-container">
        <div class="tab">
            <a href="<?= host ?>/login/signup" class="tab-item ">Đăng Kí</a>
            <div class="tab-item is-active">Đăng Nhập</div>
        </div>
        <h1 class='signup-heading'>Đăng Nhập</h1>
        <form class="signup-form" autocomplete="off">
            <div class="form-group">
                <label for="name" class="form-label">Tài Khoản</label>
                <input type="text" id="MSKH" class="form-input" placeholder="B1704786" required name="MSKH">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" id="password" class="form-input" placeholder="************" required name="MatKhau">
            </div>
            <button type="submit" class="btn btn--gradient">Đăng Nhập</button>
        </form>
    </div>
</div>