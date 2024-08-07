<?php
// 商品名から値段を取得する
function getPrice($product_name) {
    if ($product_name=='りんご') {
        return 100;
    }
    // 商品の値段が設定されていない場合、nullを返す
    return null;
}

// 商品の値段が未設定の場合はnullの可能性あり
$price = getPrice('すいか');
// 無料の商品
if ($price == 0) {
    echo '商品Aはただです!'; // NULLと数値の0が等しいと評価される
    $price = 0;
}
?>
