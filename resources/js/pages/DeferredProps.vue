<template>
  <div>
    <h2 class="text-2xl font-bold">Deferred props (延遲載入 props)：不預先輸入資料到 HTML，而是當 HTML 載入完成之後才載入資料</h2>

    <div class="mt-6">
      <h3 class="mb-3 text-lg text-gray-500 font-bold">範例：延遲載入區塊資料</h3>

      <div class="grid sm:grid-cols-4 gap-4">
        <div>
          <!-- 左側側邊欄 -->
          <div class="px-6 py-4 border-2 border-indigo-500">
            <Deferred data="newsItems">
              <template #fallback>
                <div class="animate-pulse space-y-5 py-1">
                  <div class="h-4 bg-gray-200 rounded"></div>
                  <div class="space-y-3">
                    <div class="h-2 bg-gray-200 rounded"></div>
                    <div class="h-2 bg-gray-200 rounded"></div>
                    <div class="grid grid-cols-3 gap-4">
                      <div class="h-2 bg-gray-200 rounded col-span-1"></div>
                      <div class="h-2 bg-gray-200 rounded col-span-2"></div>
                    </div>
                    <div class="h-2 bg-gray-200 rounded"></div>
                    <div class="grid grid-cols-3 gap-4">
                      <div class="h-2 bg-gray-200 rounded col-span-2"></div>
                    </div>
                  </div>
                </div>
              </template>

              <h4 class="text-lg font-bold">最新資訊</h4>
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
                  <tr v-for="rowWidth in [
                    [93, 90, 100],
                    [96, 94, 99],
                    [89, 99, 71],
                    [91, 89, 95],
                    [86, 90, 68],
                  ]" class="animate-pulse">
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div
                        class="h-2 bg-gray-200 rounded col-span-2"
                        :style="{ width: `${rowWidth[0]}%` }"
                      ></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div
                        class="h-2 bg-gray-200 rounded col-span-2"
                        :style="{ width: `${rowWidth[1]}%` }"
                      ></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div
                        class="h-2 bg-gray-200 rounded col-span-2"
                        :style="{ width: `${rowWidth[2]}%` }"
                      ></div>
                    </td>
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
