<div class="container mx-auto">
  <div class="flex flex-col justify-center items-center min-h-[calc(100vh-80px)] p-4">
    <div class="w-full max-w-4xl bg-white shadow-xl rounded-lg p-6 border">

      <div class="flex justify-between items-center mb-6">
        <div>
          <h1 class="text-2xl font-bold text-gray-800">จัดการรายวิชา</h1>
        </div>
      </div>

      <?php if (empty($enrollments)) { ?>
        <p class="bg-gray-100 text-gray-500 text-center rounded-md py-3">ยังไม่มีรายวิชา</p>
      <?php } else { ?>
        <div class="overflow-x-auto">
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
              <?php foreach($enrollments as $key => $enrollment) { ?>
                <tr class="border-b hover:bg-gray-50">
                  <td class="p-3 text-left"><?= $key + 1 ?></td>
                  <td class="p-3 text-left"><?= htmlspecialchars($enrollment['course_code']) ?></td>
                  <td class="p-3 text-left"><?= htmlspecialchars($enrollment['course_name']) ?></td>
                  <td class="p-3 text-left"><?= htmlspecialchars($enrollment['instructor']) ?></td>
                  <td class="text-center">
                    <form action="/drop" method="post" class="delete-form">
                      <input type="hidden" name="enrollment_id" value="<?= $enrollment['enrollment_id'] ?>">
                      <button type="submit" class="cursor-pointer text-red-600 font-medium rounded-lg p-1 text-lg outline-none hover:text-red-700 active:ring-2 active:ring-red-300 duration-300">
                        <i class="fa-solid fa-trash"></i>
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

<script>
  const deleteForms = document.querySelectorAll(".delete-form");

  deleteForms.forEach((form) => {
    const handleSubmit = function(e) {
      e.preventDefault();

      Swal.fire({
        title: "คุณต้องการลบหรือไม่?",
        text: "คุณลบแล้วจะไม่สามารถย้อนกลับได้!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "ลบเลย",
        cancelButtonText: "ยกเลิก"
      }).then((result) => {
        if (result.isConfirmed) {
          form.removeEventListener("submit", handleSubmit);
          form.submit();
        }
      });
    };
    
    form.addEventListener("submit", handleSubmit);
  });
</script>