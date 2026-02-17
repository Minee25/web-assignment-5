<?php

if (isset($_SESSION['student'])) {
  header("Location: /home");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  renderView('login', ['title' => 'Login']);
  return;
}

$email = $_POST['email'] ??  '';
$password = $_POST['password'] ?? '';

if ($email === ''  || $password === '') {
  renderView('login', ['error' => 'กรุณากรอกข้อมูลให้ครบ']);
  return;
}

$conn = getConnection();

$stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user || $password !== $user['password']) {
  renderView('login', ['error' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง']);
  return;
}

$_SESSION['student'] = $user;

header("Location: /home");
exit;
