<div class="col-md-9">
<?php
if (isset($_GET["search"]) && $_GET["search"] != "") {
    echo '<p>Kết quả tìm kiếm cho "<b>' . htmlspecialchars($_GET["search"]) . '</b>"</p>';
}

// Check if the $arrsp array is empty
if (empty($arrsp)) {
    echo '<p>Không có sản phẩm nào được tìm thấy.</p>';
} else {
    foreach ($arrsp[isset($_GET["page"]) ? $_GET["page"] : 1] as $sanpham) {
        ?>
        <div class="col-md-3 col-sm-6">
            <div class="single-shop-product">
                <div class="product-upper">
                    <a href="detail.php?id_sp=<?php echo $sanpham->id_sp; ?>" title="<?php echo htmlspecialchars($sanpham->ten_sp); ?>" id="tensp<?php echo $sanpham->id_sp; ?>">
                        <img src="img/<?php echo htmlspecialchars($sanpham->hinh); ?>" alt="">
                    </a>
                </div>
                <h2>
                    <a href="detail.php?id_sp=<?php echo $sanpham->id_sp; ?>" title="<?php echo htmlspecialchars($sanpham->ten_sp); ?>" id="tensp<?php echo $sanpham->id_sp; ?>">
                        <?php echo htmlspecialchars($sanpham->ten_sp); ?>
                    </a>
                </h2>
                <div class="product-carousel-price">
                    <ins><?php echo number_format($sanpham->don_gia) . " "; ?>₫</ins>
                    <input type="hidden" id="dongia<?php echo $sanpham->id_sp; ?>" value="<?php echo $sanpham->don_gia; ?>" />
                    <input type="hidden" id="soluong<?php echo $sanpham->id_sp; ?>" value="1" />
                </div>
                <div class="product-option-shop">
                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="javascript:void(0)" id="<?php echo $sanpham->id_sp; ?>">Thêm vào giỏ</a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
</div>
