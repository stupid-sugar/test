<?php
include case6.php;

// 商品名から値段を取得する
function getPrice($product_name) {
    if ($product_name=='りんご') {
        return '品切れ中です。';
    }
    return 10000;
}

$product_name = 'りんご';
$price = getPrice($product_name);
$discount_price = discount($price);
?>
