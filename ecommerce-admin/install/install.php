<?php require_once '../config.php'; ?>


<?php function runSQLFromFile($pdo, $filepath)
{
  $sql = file_get_contents($filepath);
  if ($sql === false) {
    throw new Exception("Could not read file $filepath");
  }
  $statements = array_filter(array_map('trim', explode(";\n", $sql)));

  foreach ($statements as $statement) {
    if (!empty($statement)) {
      $pdo->exec($statement);
    }
  }
} ?>

<?php
$alreadyInstalled = false;
try {
  $statement = $pdo->query('SELECT COUNT(*) from USERS');
  if ($statement->fetchColumn() > 0) {
    $alreadyInstalled = true;
  }
} catch (PDOException $e) {
  ///  handle exceptions
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Install | Simple Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
  <div class="bg-white rounded-xl shadow-xl p-6 max-w-xl w-full">
    <h1 class="text-2xl font-semibold mb-4">🛠 Simple Store Installer</h1>
        <?php if ($alreadyInstalled): ?>
      <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg">
        <strong>Already Installed:</strong><br>
        A user already exists in the system.<br>
        If you'd like to reinstall, please empty the <code>users</code> table manually.
      </div>
    <?php else: ?>
      <?php try {
        runSQLFromFile($pdo, BASE_DIR . '/database/schema.sql');
        runSQLFromFile($pdo, BASE_DIR . '/database/seed.sql');?>
          <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-4">
            ✅ <strong>Installation Complete!</strong><br>
            You can now <a href="" class="text-blue-600 underline">go to the admin panel</a>.
          </div>
          <div class="bg-blue-100 text-blue-800 p-4 rounded-lg">
            🔒 Please delete the <code>/install/</code> folder for security.
          </div>
          <?php
      } catch (Exception $e) {
        ?>
          <div class="bg-red-100 text-red-800 p-4 rounded-lg">
            ❌ <strong>Installation Failed:</strong><br>
            <pre class="text-sm whitespace-pre-wrap">
	       <?php echo $e->getMessage(); ?>
	    </pre>
          </div>
          <?php
      } ?>
    <?php endif; ?>

  </div>
</body>
</html>
