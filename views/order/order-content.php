<?php
if ((isset($_SESSION["damua"])) && ($_SESSION["count"] != 0)) {
    ?>
    <div class="col-md-8">
        <div class="product-content-right">
            <div class="woocommerce">
                <form method="post">
                    <table cellspacing="0" class="shop_table cart">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">STT</th>
                                <th class="product-name">Mã đơn hàng</th>
                                <th class="product-price">Ghi chú</th>
                                <th class="product-quantity">Trạng thái</th>
                                <th class="product-subtotal">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_SESSION["damua"] as $id_donhang) {
                                $donhang = $pModel->Xem_chi_tiet($id_donhang);
                                ?>
                                <tr id="tr1" class="cart_item">
                                    <td class="product-thumbnail">
                                        <a href="detail.php?id_sp=<?php echo $san_pham->id_sp; ?>">
                                            <img width="145" height="145" alt="error" class="shop_thumbnail" src="img/<?php echo $san_pham->hinh; ?>">
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="detail.php?id_sp=<?php echo $san_pham->id_sp; ?>"><?php echo $san_pham->ten_sp; ?></a>
                                    </td>
                                    <!-- Add other table data elements as needed -->
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
} else {
    ?>
    <div class="col-md-8">
        <div class="product-content-right">
            <div class="woocommerce">
                <form method="post" action="checkout.php">
                    <table cellspacing="0" class="shop_table cart">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">STT</th>
                                <th class="product-name">Mã đơn hàng</th>
                                <th class="product-price">Ghi chú</th>
                                <th class="product-quantity">Trạng thái</th>
                                <th class="product-subtotal">Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="actions" colspan="6">
                                    <div class="nocart" style="text-align: center;">
                                        <label>Bạn chưa đặt đơn hàng nào</label>
                                        <a href="product.php">Click vào đây để tham khảo sản phẩm</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>
