<?php

$student_id = $_SESSION['student']['student_id'] ?? 0;

if ($student_id <= 0) {
  header("Location: /login");
  exit;
}

$conn = getConnection();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $course_id = (int) ($_POST['course_id'] ?? 0);

  if ($student_id <= 0 || $course_id <= 0) {
    header("Location: /courses");
    exit;
  }

  // Check duplicate
  $check = $conn->prepare("SELECT enrollment_id FROM enrollment WHERE student_id = ? AND course_id = ?");
  $check->bind_param("ii", $student_id, $course_id);
  $check->execute();
  $check->store_result();

  if ($check->num_rows !== 0) {
    header("Location: /courses?error=duplicate");
    exit;
  }
  $stmt = $conn->prepare("INSERT INTO enrollment (student_id, course_id) VALUES (?, ?)");
  $stmt->bind_param("ii", $student_id, $course_id);
  $stmt->execute();

  header("Location: /courses");
  exit;
}

$stmt = $conn->prepare("SELECT * from courses");
$stmt->execute();
$result = $stmt->get_result();
$courses = $result->fetch_all(MYSQLI_ASSOC);

renderView('courses', ['title' => 'รายวิชา', 'courses' => $courses, 'error' => $_GET['error'] ?? null]);

exit;
