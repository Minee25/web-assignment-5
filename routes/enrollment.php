<?php

$student_id = $_SESSION['student']['student_id'] ?? 0;

if ($student_id <= 0) {
  header("Location: /login");
  exit;
}

$conn = getConnection();

$stmt = $conn->prepare("
  SELECT
    e.enrollment_id,
    e.student_id,
    e.course_id,
    c.course_id,
    c.course_code,
    c.course_name,
    c.instructor
  FROM enrollment e
  JOIN courses c ON e.course_id = c.course_id
  WHERE e.student_id = ?
");
$stmt->bind_param("i", $student_id);
$stmt->execute();
$result = $stmt->get_result();
$enrollments = $result->fetch_all(MYSQLI_ASSOC);

renderView('enrollment', ['title' => 'ผลการลงทะเบียน', 'enrollments' => $enrollments]);
