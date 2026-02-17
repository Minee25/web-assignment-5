<div class="container mx-auto">
  <div class="flex flex-col justify-center items-center min-h-[calc(100vh-80px)] p-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-2xl p-8 border">

      <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">ข้อมูลนักเรียน</h1>
        <a href="/logout" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition"><i class="fa-solid fa-right-from-bracket text-red-400"></i> ออกจากระบบ</a></a>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        <div class="flex flex-col items-center">
          <div class="w-40 h-40 rounded-full bg-slate-200 flex items-center justify-center text-6xl text-slate-500">
            <i class="fa-solid fa-user"></i>
          </div>
        </div>

        <div class="md:col-span-2 space-y-6">
          <div>
            <p class="text-sm text-gray-500">ชื่อนักเรียน</p>
            <p class="text-lg font-medium text-gray-800">
              <?= htmlspecialchars($student['first_name']) ?>
              <?= htmlspecialchars($student['last_name']) ?>
            </p>
          </div>

          <div>
            <p class="text-sm text-gray-500">วันเกิด</p>
            <p class="text-lg font-medium text-gray-800">
              <?= htmlspecialchars($student['date_of_birth'] ?? '-') ?>
            </p>
          </div>

          <div>
            <p class="text-sm text-gray-500">อีเมล</p>
            <p class="text-lg font-medium text-gray-800">
              <?= htmlspecialchars($student['email'] ?? '-') ?>
            </p>
          </div>

          <div>
            <p class="text-sm text-gray-500">เบอร์โทรศัพท์</p>
            <p class="text-lg font-medium text-gray-800">
              <?= htmlspecialchars($student['phone_number'] ?? '-') ?>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>