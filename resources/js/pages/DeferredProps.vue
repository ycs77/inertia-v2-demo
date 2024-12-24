<template>
  <div>
    <h2 class="text-2xl font-bold">Deferred props (延遲載入 props)：不預先輸入資料到 HTML，而是當 HTML 載入完成之後才載入資料</h2>

    <div class="mt-6">
      <h3 class="mb-3 text-lg text-gray-500 font-bold">範例：延遲載入區塊資料</h3>

      <div class="grid sm:grid-cols-4 gap-4">
        <div>
          <!-- 左側側邊欄 -->
          <div class="px-6 py-4 border-2 border-indigo-500">
            <h4 class="text-lg font-bold">最新資訊</h4>

            <Deferred data="newsItems">
              <template #fallback>
                <div class="mt-3 text-gray-400">載入中...</div>
              </template>

              <ul class="mt-3 list-disc list-inside">
                <li v-for="item in newsItems" :key="item.id">
                  {{ item.title }}
                </li>
              </ul>
            </Deferred>
          </div>
        </div>

        <div class="sm:col-span-3">
          <!-- 主要內容區塊 -->
          <table class="min-w-full border-2 border-indigo-500">
            <thead class="bg-indigo-500 text-white">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium tracking-wider">
                  ID
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium tracking-wider">
                  名稱
                </th>
                <th scope="col" class="px-6 py-3 text-left text-sm font-medium tracking-wider">
                  Email
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y-2 divide-indigo-500">
              <Deferred data="users">
                <template #fallback>
                  <tr>
                    <td class="px-6 py-4 text-center text-gray-400 whitespace-nowrap" colspan="3">載入中...</td>
                  </tr>
                </template>

                <tr v-for="user in users" :key="user.id">
                  <td class="px-6 py-4 whitespace-nowrap">{{ user.id }}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{ user.name }}</td>
                  <td class="px-6 py-4 whitespace-nowrap">{{ user.email }}</td>
                </tr>
              </Deferred>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Deferred } from '@inertiajs/vue3'

defineProps({
  newsItems: Object,
  users: Object,
})
</script>
