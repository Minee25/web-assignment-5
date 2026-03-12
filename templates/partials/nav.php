<!-- Navigation -->
<div class="bg-primary fixed top-0 left-0 w-full shadow-float">
  <div class="container mx-auto h-20 px-4 flex justify-between items-center">
    <a href="/" class="flex items-center">
      <i class="fa-solid fa-user-graduate text-4xl text-white"></i>
      <h1 class="hidden md:block text-4xl text-white font-serif">ระบบลงทะเบียน</h1>
    </a>
    <div class="flex">
      <ul class="gap-4 flex">
        <li><a class="text-white text-lg hidden md:flex" href="/">หน้าแรก</a></li>
        <li><a class="text-white text-lg hidden md:flex" href="/enrollment">ผลการลงทะเบียน</a></li>
        <li><a class="text-white text-lg hidden md:flex" href="/courses">รายวิชา</a></li>
        <?php if (empty($_SESSION['student'])) { ?>
          <li><a class="text-white text-lg" href="/login"><i class="fa-solid fa-right-to-bracket"></i> เข้าสู่ระบบ</a></li>
        <?php } ?>
      </ul>
      <?php if (!empty($_SESSION['student'])) { ?>
        <div class="relative group inline-block ml-4">
          <div class="flex cursor-pointer text-white">
            <i class="fa-solid fa-user text-3xl md:text-xl"></i>
            <p class="text-3xl md:text-xl"><?= htmlspecialchars($_SESSION['student']['first_name'] ?? '') ?></p>
          </div>
          <div class="absolute right-0 mt-2 w-48 bg-dark rounded-2xl shadow-float opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
            <ul class="py-2">
              <li><a class="flex md:hidden text-white text-lg items-center gap-2 px-4 py-2 hover:bg-white/10 rounded-lg mx-2" href="/">หน้าแรก</a></li>
              <li><a class="flex md:hidden text-white text-lg items-center gap-2 px-4 py-2 hover:bg-white/10 rounded-lg mx-2" href="/enrollment">ผลการลงทะเบียน</a></li>
              <li><a class="mb-6 flex md:hidden text-white text-lg items-center gap-2 px-4 py-2 hover:bg-white/10 rounded-lg mx-2" href="/courses">รายวิชา</a></li>
              <li><a class="flex text-white text-lg items-center gap-2 px-4 py-2 hover:bg-white/10 rounded-lg mx-2" href="/profile"><i class="fa-solid fa-user"></i>ข้อมูลนักเรียน </a></li>
              <li><a href="/logout" class="flex items-center gap-2 px-4 py-2 text-white hover:bg-white/10 rounded-lg mx-2"><i class="fa-solid fa-right-from-bracket text-red-400"></i> ออกจากระบบ</a></li>
            </ul>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
