<div class="p-6 max-w-xl mx-auto">
  <h1 class="text-xl font-bold mb-4">Edit Product</h1>
  <form method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    <input type="text" name="name" value="" class="w-full border px-3 py-2 rounded" required>
    <textarea name="description" class="w-full border px-3 py-2 rounded" required></textarea>
    <input type="number" name="price" step="0.01" value="" class="w-full border px-3 py-2 rounded" required>
    <select name="category_id" class="w-full border px-3 py-2 rounded" required>
        <option value=""></option>
    </select>
    <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
  </form>
</div>

