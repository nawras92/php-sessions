<?php require_once __DIR__ . '/../init.php'; ?>


<?php $pageTitle = 'Products Page'; ?>
<?php include_once BASE_DIR . '/partials/header.php'; ?>
<?php include_once BASE_DIR . '/partials/nav.php'; ?>
<?php include_once BASE_DIR . '/partials/alerts.php'; ?>

<?php
$stmt = $pdo->query("
		SELECT products.*, categories.name AS category_name FROM products JOIN categories ON products.category_id = categories.id ORDER BY products.created_at DESC;
		");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="p-6">
  <h1 class="text-2xl font-semibold text-gray-800 mb-6">Product List</h1>

  <div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">#</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Created</th>
          <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach ($products as $index => $product): ?>
          <tr>
            <td class="px-6 py-4 whitespace-nowrap"><?= $index + 1 ?> </td>
            <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
	        <?= htmlspecialchars($product['name']) ?>
	    </td>
            <td class="px-6 py-4 whitespace-nowrap"><?= htmlspecialchars(
              $product['category_name'],
            ) ?></td>
            <td class="px-6 py-4 whitespace-nowrap text-green-600 font-semibold">
	        <?= number_format($product['price'], 2) ?>
	    </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
	        <?= date('Y-m-d', strtotime($product['created_at'])) ?>
	    </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <a href="product_edit.php?id=<?php echo $product[
                'id'
              ]; ?>" class="text-blue-600 hover:underline text-sm mr-4">Edit</a>
              <a href="product_delete.php?id=<?php echo $product[
                'id'
              ]; ?>" class="text-red-600 hover:underline text-sm"  onclick="return confirm('Are you sure?')">Delete</a>
            </td>
          </tr>
	  <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>





<?php include_once BASE_DIR . '/partials/footer.php'; ?>
