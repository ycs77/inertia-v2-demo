<template>
  <div class="space-y-8">
    <div v-for="section in sections" :key="section.title" class="space-y-4">
      <h2 class="text-2xl font-bold">
        {{ section.title }}
      </h2>

      <ul class="mt-4 border-2 border-indigo-500 divide-y-2 divide-indigo-500">
        <li v-for="item in section.items" :key="item.href">
          <Link :href="item.href" class="group block px-4 py-2.5 hover:bg-indigo-500 text-gray-600 hover:text-white transition-colors duration-75">
            <h5 class="font-bold">
              {{ item.title }}<template v-if="item.zhTitle"> ({{ item.zhTitle }})</template>
            </h5>
            <p class="mt-1 text-sm text-gray-400 group-hover:text-indigo-200 transition-colors duration-75">
              {{ item.description }}
            </p>
          </Link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script setup>
import { nav } from '../nav'

const sections = [
  {
    title: 'Inertia v2.0 新功能 Demo',
    items: nav.filter(item => item.version === '2.0'),
  },
  {
    title:
    'Inertia v2.2 新功能 Demo',
    items: nav.filter(item => item.version === '2.2'),
  },
]
</script>
