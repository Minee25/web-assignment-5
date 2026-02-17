<div class="container mx-auto ">
  <div class="flex flex-col justify-center items-center min-h-[calc(100vh-80px)] p-4">
    <div class="w-full max-w-2xl rounded-md shadow-lg">
      <div class="bg-blue-500 rounded-t-md ">
        <h1 class="text-white text-center text-3xl p-3">เข้าสู่ระบบ</h1>
      </div>
      
      <?php if (!empty($error)) { ?>
        <div class="pb-0 p-4 flex justify-center w-full">
          <div id="toast-warning" class="flex items-center w-full p-3 text-amber-900 bg-amber-50 rounded-xl shadow-md border border-amber-200 transition-all duration-300" role="alert">
            <div class="inline-flex items-center justify-center shrink-0 w-10 h-10 text-amber-500 bg-amber-100 rounded-full shadow-sm">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
              </svg>
              <span class="sr-only">Warning icon</span>
            </div>
            <div class="ms-4 mr-2">
              <p class="text-sm font-semibold"><?= htmlspecialchars($error) ?></p>
            </div>
            <button type="button" onclick="document.getElementById('toast-warning').remove();" class="ms-auto flex items-center justify-center text-amber-700/50 hover:text-amber-900 hover:bg-amber-200/50 focus:ring-4 focus:ring-amber-200 transition-colors duration-200 font-medium rounded-lg text-sm h-8 w-8 focus:outline-none" data-dismiss-target="#toast-warning" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
              </svg>
            </button>
          </div>
        </div>
      <?php } ?>

      <form action="/login" method="post" class="flex flex-col p-4">
        <div>
          <label for="email" class="block my-2 text-sm text-gray-600">
            อีเมล <span class="text-red-500">*</span>
          </label>
          <input type="email" name="email" id="email" placeholder="อีเมล" autofocus required class="w-full p-2.5 text-black bg-gray-50 text-base rounded-lg border focus:outline focus:outline-2 focus:outline-blue-500 focus:border focus:ring-blue-500 focus:border-blue-500 block">
        </div>

        <div>
          <label for="password" class="block my-2 text-sm text-gray-600">
            รหัสผ่าน <span class="text-red-500">*</span>
          </label>
          <input type="password" name="password" id="password" placeholder="รหัสผ่าน" required class="w-full p-2.5 text-black bg-gray-50 text-base rounded-lg border focus:outline focus:outline-2 focus:outline-blue-500 focus:border focus:ring-blue-500 focus:border-blue-500 block">
        </div>

        <!-- Action Button -->
        <div class="w-full flex justify-end mt-8 gap-4">
          <a href="/" class="cursor-pointer text-white bg-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 outline-none hover:bg-gray-700 active:ring-2 active:ring-gray-300 duration-300">ยกเลิก</a>
          <button type="submit" class="cursor-pointer text-white bg-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 outline-none hover:bg-blue-700 active:ring-2 active:ring-blue-300 duration-300">เข้าสู่ระบบ</button>
        </div>
      </form>
      
    </div>
  </div>
</div>
