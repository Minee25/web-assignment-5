<?php

declare(strict_types=1);

function renderView(string $template, array $data = []): void
{
  extract($data);
  ob_start(); // เปิด Output Buffering
  require __DIR__ . "/../templates/$template.php";
  $content = ob_get_clean(); // เอา HTML มาเก็บใน $content

  require __DIR__ . "/../templates/layout/main.php";
}
