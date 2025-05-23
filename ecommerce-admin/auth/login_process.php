<?php

require_once __DIR__ . '/../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get data
  $email = trim($_POST['email'] ?? '');
  $password = trim($_POST['password'] ?? '');

  if (empty($email) || empty($password)) {
    $_SESSION['error'] = 'Please fill in all the fields';
    header('Location: login.php');
    exit();
  }

  //
  $stmt = $pdo->prepare(
    'SELECT id, username, password, role from users where email = :email LIMIT 1',
  );
  $stmt->execute(['email' => $email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    header('Location: dashboard.php');
    exit();
  } else {
    $_SESSION['error'] = 'Invalid Email or password';
    header('Location: login.php');
    exit();
  }
} else {
  header('Location: login.php');
  exit();
}
