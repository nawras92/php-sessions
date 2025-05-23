<?php require_once __DIR__ . '/../init.php'; ?>

<?php $pageTitle = 'Login'; ?>
<?php include_once BASE_DIR . '/partials/header.php'; ?>
<?php include_once BASE_DIR . '/partials/nav.php'; ?>

<div class="flex items-center justify-center flex-grow">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login to Your Account</h1>

      <?php if (isset($_SESSION['error'])): ?>
      <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
               <?php echo htmlspecialchars($_SESSION['error']); ?>
      </div>
         <?php unset($_SESSION['error']); ?>
      <?php endif; ?>

    <form action="login_process.php" method="POST" class="space-y-4">
      <div>
        <label class="block text-gray-600 mb-1" for="email">Email</label>
        <input type="email" name="email" id="email" 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-400">
      </div>

      <div>
        <label class="block text-gray-600 mb-1" for="password">Password</label>
        <input type="password" name="password" id="password" 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-400">
      </div>

      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">
        Login
      </button>
    </form>
  </div>
</div>

<?php include_once BASE_DIR . '/partials/footer.php'; ?>






