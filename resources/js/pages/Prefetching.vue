<template>
  <div>
    <h2 class="text-2xl font-bold">Prefetching (預先載入)：鼠標滑入連結時，預先載入該連結頁面的資料</h2>

    <div class="mt-6">
      <h3 class="mb-3 text-lg text-gray-500 font-bold">範例：將滑鼠滑入連結來預先載入該頁面 (可以點 F12 從瀏覽器的 DevTools 觀察)</h3>

      <div class="flex space-x-4">
        <Link href="/prefetching/users" class="hover:text-indigo-600 font-bold underline" prefetch :cache-for="['6s', '1m']">
          使用者列表
        </Link>
      </div>
    </div>
  </div>
</template>
