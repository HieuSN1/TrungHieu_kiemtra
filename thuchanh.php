<?php

// BÀI 1: Kiểm tra và in số nguyên tố

function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

echo "Các số nguyên tố từ 1 đến 100 là: \n";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
echo "\n\n";

//Bài 2: Quản Lý Thông Tin Sản Phẩm

$products = [
    ["name" => "Sản phẩm A", "price" => 15000, "quantity" => 2],
    ["name" => "Sản phẩm B", "price" => 30000, "quantity" => 5],
    ["name" => "Sản phẩm C", "price" => 50000, "quantity" => 1]
];

echo "Danh sách sản phẩm:\n";
foreach ($products as $product) {
    echo "- Tên: " . $product['name'] . " | Giá: " . $product['price'] . " | Số lượng: " . $product['quantity'] . "\n";
}

function calculateTotalValue($productsArray) {
    $total = 0;
    foreach ($productsArray as $item) {
        $total += ($item['price'] * $item['quantity']);
    }
    return $total;
}

$totalValue = calculateTotalValue($products);
echo "\nTổng giá trị của tất cả sản phẩm là: " . $totalValue . " VNĐ\n";
?>