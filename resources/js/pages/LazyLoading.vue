<template>
  <div>
    <h2 class="text-2xl font-bold">Lazy loading data on scroll (Lazy loading、惰性載入)：當元素出現在畫面中時，才載入資料</h2>

    <div class="mt-6">
      <h3 class="mb-3 text-lg text-gray-500 font-bold">範例：延遲載入圖表</h3>

      <div
        v-for="i in 10"
        :key="i"
        class="h-20 text-indigo-500"
        :style="`opacity: ${i / 10};`"
      >↓</div>

      <div class="p-4 border-2 border-indigo-500">
        <WhenVisible data="usersChart">
          <template #fallback>
            <div class="h-96 flex items-center justify-center">
              載入圖表中...
            </div>
          </template>

          <LazyLoadingChart :data="usersChart" />
        </WhenVisible>
      </div>
    </div>
  </div>
</template>

<script setup>
import { WhenVisible } from '@inertiajs/vue3'
import LazyLoadingChart from '../components/LazyLoadingChart.vue'

const props = defineProps({
  usersChart: Object,
})
</script>
