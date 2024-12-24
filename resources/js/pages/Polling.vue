<template>
  <div>
    <h2 class="text-2xl font-bold">Polling (輪巡)：使用 usePoll() 輪巡定時拉取新資料</h2>

    <div class="mt-6">
      <h3 class="mb-3 text-lg text-gray-500 font-bold">範例：遊戲玩家即時分數表，每隔2秒自動更新</h3>

      <table class="min-w-full border-2 border-indigo-500">
        <thead class="bg-indigo-500 text-white">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-sm font-medium tracking-wider">
              排名
            </th>
            <th scope="col" class="px-6 py-3 text-left text-sm font-medium tracking-wider">
              玩家
            </th>
            <th scope="col" class="px-6 py-3 text-left text-sm font-medium tracking-wider">
              分數
            </th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y-2 divide-indigo-500">
          <tr v-for="(player, i) in players" :key="player">
            <td class="px-6 py-4 whitespace-nowrap">{{ i + 1 }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ player.name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ player.votes }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { usePoll } from '@inertiajs/vue3'

defineProps({
  players: Object,
})

usePoll(2000)
</script>
