<template>
  <div>
    <h2 class="text-2xl font-bold">Inertia v2 新功能 Demo</h2>

    <ul class="mt-4 border divide-y rounded-md overflow-hidden">
      <li v-for="item in nav" :key="item.href">
        <Link :href="item.href" class="group block px-4 py-2.5 hover:bg-indigo-600 text-gray-600 hover:text-white transition-colors duration-75">
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
</template>

<script setup>
import { nav } from '../nav'
</script>
