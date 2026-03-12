<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? "Reg" ?></title>
  <link rel="icon" type="image/x-icon" href="/../images/logo-aplus.png">

  <!-- CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cream: '#FDF6F0',
            primary: {
              DEFAULT: '#F39237',
              hover: '#E07F2A',
            },
            dark: '#2D2A26',
          },
          fontFamily: {
            kanit: ['Kanit', 'cursive'],
            serif: ['Playfair Display', 'Georgia', 'serif'],
          },
          borderRadius: {
            '4xl': '2rem',
          },
          boxShadow: {
            'card': '0 4px 20px rgba(0, 0, 0, 0.06)',
            'float': '0 8px 32px rgba(0, 0, 0, 0.12)',
          },
        },
      },
    }
  </script>

  <style>
    .bounce-in-left {
      animation: bounceInLeft 0.3s both;
    }

    @keyframes bounceInLeft {
      0% {
        opacity: 0;
        transform: translateX(-300px);
      }
      100% {
        transform: translateX(0);
      }
    }
  </style>

</head>
<body class="pt-20 font-[kanit] bg-cream">

  <?php include __DIR__ . "/../partials/nav.php" ?>
  <?= $content ?>
  
</body>
</html>