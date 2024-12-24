<template>
  <div>
    <h2 class="text-2xl font-bold">Infinite Scroll (無限滾動)：無限滾動載入資料</h2>

    <div class="mt-6">
      <ul class="border-2 border-indigo-500 divide-y-2 divide-indigo-500">
        <li v-for="item in items" :key="item.id" class="block px-4 py-2.5 text-gray-600">
          {{ item.title }}
        </li>
      </ul>

      <WhenVisible
        always
        :buffer="200"
        :params="{
          data: {
            page: page + 1,
          },
          only: ['items', 'page'],
          preserveUrl: true,
        }"
      >
        <template #fallback>
          <div class="p-4 text-center bg-gray-100">載入中...</div>
        </template>

        <div class="p-4 text-center bg-gray-100">載入中...</div>
      </WhenVisible>
    </div>
  </div>
</template>

<script setup>
import { WhenVisible } from '@inertiajs/vue3'

const props = defineProps({
  items: Object,
  page: Number,
})
</script>
