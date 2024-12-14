<template>
  <div>
    <h2 class="text-2xl font-bold">Prefetching (預先載入)：鼠標滑入連結時，預先載入該連結頁面的資料</h2>

    <div class="mt-6">
      <div class="mb-3">
        <Link href="/prefetching" class="hover:text-indigo-600 font-bold underline">
          返回
        </Link>
      </div>

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
          <tr v-for="user in users" :key="user.id">
            <td class="px-6 py-4 whitespace-nowrap">{{ user.id }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ user.name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ user.email }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
defineProps({
  users: Object,
})
</script>
