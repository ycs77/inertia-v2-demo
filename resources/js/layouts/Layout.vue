<template>
  <div>
    <header class="py-5 border-b-2 border-indigo-600">
      <div class="max-w-screen-xl px-4 mx-auto flex items-center">
        <Link href="/" class="relative px-2 py-0.5 text-white text-lg font-black before:bg-indigo-600 before:content-[''] before:z-[-1] before:absolute before:inset-0 before:-rotate-1">
          Inertia v2 Demo
        </Link>

        <nav class="ml-12">
          <ul class="flex space-x-6">
            <li v-for="item in nav" :key="item.href">
              <Link
                :href="item.href"
                class="text-sm font-bold"
                :class="$page.url.startsWith(item.href) ? 'text-indigo-600' : 'hover:text-indigo-600'"
              >
                {{ item.title }}
              </Link>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="max-w-screen-md px-4 py-6 mx-auto">
      <slot />
    </div>
  </div>
</template>

<script setup>
import { nav } from '../nav'
</script>
