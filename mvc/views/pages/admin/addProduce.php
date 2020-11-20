<form enctype="multipart/form-data" method="POST" action="<?= host ?>/Admin/postAddProduce">
    <input type="text" placeholder="tên hàng hóa" name="TenHH">
    <input type="text" name="Gia">
    <input type="text" name="SoLuongHang">
    <input type="file" name="Hinh">
    <select name="MaNhom">
        <?php
        foreach ($data['ProduceCategorys'] as $key => $value) {
            echo '<option value=' . $value['MaNhom'] . '>' . $value['TenNhom'] . ' </option>';
        }

        ?>
    </select>
    <input type="text" name="MoTaHH">


    <button type="submit"> esfes</button></form>