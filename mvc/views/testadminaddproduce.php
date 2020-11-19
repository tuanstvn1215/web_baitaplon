<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form enctype="multipart/form-data" method="POST" action="<?= host ?>/Admin/postAddProduce">
        <input type="text" placeholder="tên hàng hóa" name="TenHH">
        <input type="text" name="Gia">
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
</body>

</html>