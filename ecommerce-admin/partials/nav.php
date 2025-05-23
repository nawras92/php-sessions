<nav class="bg-gray-800 text-white">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center h-16">
      
      <!-- Logo / Brand -->
      <div class="flex-shrink-0">
        <a href="<?= BASE_URL ?>" class="text-xl font-bold hover:text-gray-300">MyWebsite</a>
      </div>

      <!-- Navigation Links -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="<?= BASE_URL ?>" class="hover:text-gray-300">Home</a>
        
	<?php if (isset($_SESSION['user_id'])): ?>
          <a href="<?= BASE_URL .
            'auth/dashboard.php' ?>" class="hover:text-gray-300">Dashboard</a>
        <a href="<?= BASE_URL .
          'products/index.php' ?>" class="hover:text-gray-300">Products</a>
        <a href="<?= BASE_URL .
          'categories/index.php' ?>" class="hover:text-gray-300">Categories</a>
        <a href="<?= BASE_URL .
          'orders/index.php' ?>" class="hover:text-gray-300">Orders</a>
          <a href="<?= BASE_URL .
            'auth/logout.php' ?>" class="hover:text-gray-300">Logout (<?php echo $_SESSION[
  'username'
]; ?>) </a>
	    <?php endif; ?>
	<?php if (!isset($_SESSION['user_id'])): ?>
          <a href="<?= BASE_URL .
            'auth/login.php' ?>" class="hover:text-gray-300">Login</a>
          <a href="<?= BASE_URL .
            'auth/register.php' ?>" class="hover:text-gray-300">Register</a>
	    <?php endif; ?>
      </div>

    </div>
  </div>
</nav>


