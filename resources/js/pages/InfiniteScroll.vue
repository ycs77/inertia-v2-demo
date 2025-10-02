<template>
  <div>
    <h2 class="text-2xl font-bold">Infinite Scroll (無限滾動)：無限滾動載入資料</h2>

    <div class="mt-6">
      <InfiniteScroll
        data="users"
        as="ul"
        :buffer="1000"
        preserve-url
        class="border-2 border-indigo-500 divide-y-2 divide-indigo-500"
      >
        <li v-for="user in users.data" :key="user.id" class="block px-4 py-2.5 text-gray-600">
          {{ user.name }} ({{ user.email }})
        </li>

        <template #loading>
          <div class="p-4 text-center bg-gray-100">載入中...</div>
        </template>
      </InfiniteScroll>
    </div>
  </div>
</template>

<script setup>
import { InfiniteScroll } from '@inertiajs/vue3'

const props = defineProps({
  users: Object,
})
</script>
