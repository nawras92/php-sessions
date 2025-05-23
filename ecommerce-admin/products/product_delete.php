<?php

require_once __DIR__ . '/../init.php';

$id = $_GET['id'] ?? null;

if (!$id || !is_numeric($id)) {
  $_SESSION['error'] = 'Invalid Product Id';
  header('Location: index.php');
  exit();
}

try {
  // Check if product is used in any order_items
  $stmt = $pdo->prepare(
    'SELECT COUNT(*) from order_items where product_id = ?',
  );
  $stmt->execute([$id]);
  $count = $stmt->fetchColumn();
  if ($count > 0) {
    $_SESSION['error'] =
      'Cannot delete product:  it is used in existing orders';
  } else {
    // safe to delete
    $stmt = $pdo->prepare('DELETE FROM products where id = ?');
    $stmt->execute([$id]);
    if ($stmt->rowCount()) {
      $_SESSION['success'] = 'Product deleted Successfully';
    } else {
      $_SESSION['error'] = 'Product not found or already deleted';
    }
  }
} catch (PDOException $e) {
  $_SESSION['error'] = 'Database error: ' . $e->getMessage();
}

header('Location: index.php');
exit();
