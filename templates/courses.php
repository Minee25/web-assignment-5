<div class="container mx-auto">
  <div class="flex flex-col justify-center items-center min-h-[calc(100vh-80px)] p-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-lg p-6 border">

      <div class="flex justify-between items-center mb-6">
        <div>
          <h1 class="text-2xl font-bold text-gray-800">จัดการรายวิชา</h1>
        </div>
      </div>

      <?php if (empty($courses)) { ?>
        <p class="bg-gray-100 text-gray-500 text-center rounded-md py-3">ยังไม่มีรายวิชา</p>
      <?php } else { ?>
        <div class="overflow-x-auto">

          <?php if (!empty($error) || $error === "duplicate") { ?>
            <div class="bounce-in-left pb-6 flex justify-center w-full">
              <div id="toast-warning" class="flex items-center w-full p-3 text-red-900 bg-red-50 rounded-xl shadow-md border border-red-200 transition-all duration-300" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-10 h-10 text-red-500 bg-red-100 rounded-full shadow-sm">
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                  </svg>
                  <span class="sr-only">Warning icon</span>
                </div>
                <div class="ms-4 mr-2">
                  <p class="text-sm font-semibold">ลงทะเบียนวิชานี้ไปแล้วลงซ้ำอีกไม่ได้</p>
                </div>
                <button type="button" onclick="document.getElementById('toast-warning').remove();" class="ms-auto flex items-center justify-center text-red-700/50 hover:text-red-900 hover:bg-red-200/50 focus:ring-4 focus:ring-red-200 transition-colors duration-200 font-medium rounded-lg text-sm h-8 w-8 focus:outline-none" data-dismiss-target="#toast-warning" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                  </svg>
                </button>
              </div>
            </div>
          <?php } ?>

          <table class="w-full border-collapse">
            <thead>
              <tr class="bg-gray-100 text-gray-600 text-sm">
                <th class="p-3 text-left">ลำดับ</th>
                <th class="p-3 text-left">รหัสวิชา</th>
                <th class="p-3 text-left">ชื่อวิชา</th>
                <th class="p-3 text-left">อาจารย์ผู้สอน	</th>
                <th class="p-3 text-left">จัดการ</th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <?php foreach($courses as $key => $course) { ?>
                <tr class="border-b hover:bg-gray-50">
                  <td class="p-3 text-left"><?= $key + 1 ?></td>
                  <td class="p-3 text-left"><?= htmlspecialchars($course['course_code']) ?></td>
                  <td class="p-3 text-left"><?= htmlspecialchars($course['course_name']) ?></td>
                  <td class="p-3 text-left"><?= htmlspecialchars($course['instructor']) ?></td>
                  <td class="text-center">
                    <form action="courses" method="post">
                      <input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
                      <button class="cursor-pointer text-green-600 font-medium rounded-lg p-1 text-lg outline-none hover:text-green-700 active:ring-2 active:ring-green-300 duration-300">
                        <i class="fa-solid fa-cart-plus"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      <?php } ?>
    </div>
  </div>
</div>