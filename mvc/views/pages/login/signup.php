<link rel="stylesheet" href="<?= host ?>/public/css/login/signup.css">

<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
</head>

<div class="signup">
    <img src="<?= host ?>/public/images/picture/promotion/1.png" alt="" class="signup-image">
    <div class="signup-container">
        <div class="tab">
            <div class="tab-item is-active">Đăng Kí</div>
            <a href="<?= host ?>/login/index" class="tab-item">Đăng Nhập</a>
        </div>
        <form class="signup-form" action="<?= host ?>/Login/postSignup" method="POST">
            <div class="form-group">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" id="name" class="form-input" placeholder="Trần Anh Tuấn" required name="HoTenKH">
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Tài Khoản</label>
                <input type="text" id="MSKH" class="form-input" placeholder="B1704786" required name="MSKH">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-input" placeholder="Ex: johndoe@email.com" required name="Email">
            </div>
            <div class="form-group">
                <label for="sdt" class="form-label">Số Điện thoại</label>
                <input type="number" id="number" class="form-input" placeholder="0356788555" required name="SoDienThoai">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" id="password" class="form-input" placeholder="************" required name="MatKhau">
            </div>
            <div class="form-group">
                <label for="re-password" class="form-label">nhập lại mật khẩu</label>
                <input type="password" id="re-password" class="form-input" placeholder="************" required>
            </div>
            <button type="submit" class="btn btn--gradient">Sign up</button>
        </form>
    </div>
</div>