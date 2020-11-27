<style>
    .form {
        display: flex;
        flex-direction: column;

    }

    .form-item-group {
        display: flex;
        flex-direction: column;
    }

    .form-item-group * {
        width: 300px;
    }
</style>
<form enctype="multipart/form-data" method="POST" action="<?= host ?>/Admin/postAddProduce">
    <div class='form'>
        <div class="form-item-group">
            <label for="">Tên hàng hóa:</label>
            <input class="form-input" type="text" placeholder="tên hàng hóa" name="TenHH">
        </div>
        <div class="form-item-group">
            <label for="">Giá hàng hóa:</label>
            <input class="form-input" type="text" name="Gia">
        </div>
        <div class="form-item-group">
            <label for="">Số lượng hàng</label>
            <input class="form-input" type="text" name="SoLuongHang">
        </div>
        <div class="form-item-group">
            <label for="">Hình ảnh hàng hóa</label>
            <input class="form-input" type="file" name="Hinh">
        </div>
        <div class="form-item-group">
            <label for="">Nhóm hàng hóa</label>
            <select class="form-select" name="MaNhom">
                <?php
                foreach ($data['ProduceCategorys'] as $key => $value) {
                    echo '<option value=' . $value['MaNhom'] . '>' . $value['TenNhom'] . ' </option>';
                }

                ?>
            </select>
        </div>
        <div class="form-item-group">
            <label for="">Mô tả hàng hóa</label>
            <input type="text" name="MoTaHH">
        </div>
        <div class="form-item-group">
            <label for=""></label>
            <button class="form-btn" type="submit"> esfes</button>
        </div>






    </div>
</form>