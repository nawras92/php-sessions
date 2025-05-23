<?php if (isset($_SESSION['error'])): ?>
<div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
     <?= htmlspecialchars($_SESSION['error']) ?>
     <?php unset($_SESSION['error']); ?>
</div>
<?php endif; ?>

<?php if (isset($_SESSION['success'])): ?>
<div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
     <?= htmlspecialchars($_SESSION['success']) ?>
     <?php unset($_SESSION['success']); ?>
</div>
<?php endif; ?>


