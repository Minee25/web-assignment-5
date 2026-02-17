<?php

$student_id = $_SESSION['student']['student_id'] ?? 0;

if ($student_id <= 0) {
  header("Location: /login");
  exit;
}

if (!isset($_POST['enrollment_id'])) {
  header("Location: /enrollment");
  exit;
}

$enrollment_id = (int) $_POST['enrollment_id'];

$conn = getConnection();

$stmt = $conn->prepare("
  DELETE
  FROM enrollment
  WHERE enrollment_id  = ?
  AND student_id = ?
");

$stmt->bind_param("ii", $enrollment_id, $student_id);
$stmt->execute();

header("Location: /enrollment");
exit;
