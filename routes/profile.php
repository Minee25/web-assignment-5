<?php

$student = $_SESSION['student'] ?? [];

if (empty($student)) {
  header("Location: /login");
  exit;
}

renderView('profile', ['title' => 'ข้อมูลนักเรียน', 'student' => $student]);