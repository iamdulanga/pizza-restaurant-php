<?php

require_once __DIR__.'/../config/db.php';

$stmt = $conn->prepare('SELECT * FROM products');
$stmt->execute();
$products = $stmt->get_result();
