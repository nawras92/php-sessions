<div class="flex items-center justify-center flex-grow">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">Login to Your Account</h1>

      <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                  we have error
      </div>

    <form action="login_process.php" method="POST" class="space-y-4">
      <div>
        <label class="block text-gray-600 mb-1" for="email">Email</label>
        <input type="email" name="email" id="email" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-400">
      </div>

      <div>
        <label class="block text-gray-600 mb-1" for="password">Password</label>
        <input type="password" name="password" id="password" required
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-400">
      </div>

      <button type="submit"
              class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">
        Login
      </button>
    </form>
  </div>
</div>







