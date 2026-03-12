<div class="container mx-auto">
  <div class="flex flex-col justify-center items-center min-h-[calc(100vh-80px)] p-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-2xl p-8 border">

      <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-dark font-serif">ข้อมูลนักเรียน</h1>
        <a href="/logout" class="px-4 py-2 bg-dark text-white rounded-xl hover:bg-dark/80 transition"><i class="fa-solid fa-right-from-bracket text-red-400"></i> ออกจากระบบ</a>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="flex flex-col items-center">
          <div class="w-40 h-40 rounded-full bg-primary/20 flex items-center justify-center text-6xl text-primary overflow-hidden">
            <img src="https://api.dicebear.com/9.x/avataaars-neutral/svg?seed=<?= uniqid() ?>" alt="avatar" class="w-full h-full object-cover">
          </div>
        </div>

        <div class="md:col-span-2 space-y-6">
          <div>
            <p class="text-sm text-dark/50">ชื่อนักเรียน</p>
            <p class="text-lg font-medium text-dark">
              <?= htmlspecialchars($student['first_name']) ?>
              <?= htmlspecialchars($student['last_name']) ?>
            </p>
          </div>

          <div>
            <p class="text-sm text-dark/50">วันเกิด</p>
            <p class="text-lg font-medium text-dark">
              <?= htmlspecialchars($student['date_of_birth'] ?? '-') ?>
            </p>
          </div>

          <div>
            <p class="text-sm text-dark/50">อีเมล</p>
            <p class="text-lg font-medium text-dark">
              <?= htmlspecialchars($student['email'] ?? '-') ?>
            </p>
          </div>

          <div>
            <p class="text-sm text-dark/50">เบอร์โทรศัพท์</p>
            <p class="text-lg font-medium text-dark">
              <?= htmlspecialchars($student['phone_number'] ?? '-') ?>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>