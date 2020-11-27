<link rel="stylesheet" href='<?= host ?>/public/css/admin/allProduce.css'>
<div class="user">
    ádas
</div>

<table class="table-item">
    <tr>
        <th class="table-item-title">
            Mã Hàng Hóa
        </th>

        <th class="table-item-title">
            Tên Hàng Hóa
        </th>
        <th class="table-item-title">
            Nhóm Hàng Hóa
        </th>
        <th class="table-item-title">
            Giá
        </th>

        <th class="table-item-title">
            Số Lượng
        </th>
        <th colspan="2" class="table-item-title">
        </th>
    </tr>
    <?php foreach ($data['Produce'] as $Produce) : ?>
        <tr>
            <td class="table-item-details">
                <?= $Produce['MSHH'] ?>
            </td>
            <td class="table-item-details">
                <?= $Produce['TenHH'] ?>
            </td>
            <td class="table-item-details">
                <?= $Produce['TenNhom'] ?>
            </td>
            <td class="table-item-details">
                <?= $Produce['Gia'] ?>
            </td>
            <td class="table-item-details">
                <?= $Produce['SoLuongHang'] ?>
            </td>
            <td class="table-item-btn" class="table-item-details">
                <a class="btn btn-success btn-sm" href="<?= host ?>/admin/detailsProduce/<?= $Produce['MSHH'] ?>">Xem Chi Tiết</a>

            </td>
            <td class="table-item-btn">
                <a class="btn btn-danger btn-sm" href="<?= host ?>/admin/deleteProduce/<?= $Produce['MSHH'] ?>">Xóa Sản Phẩm</a>
            </td>

        </tr>
    <?php endforeach ?>

</table>