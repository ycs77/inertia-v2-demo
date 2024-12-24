<template>
  <canvas ref="chartRef"></canvas>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { Chart, Colors, BarController, CategoryScale, LinearScale, BarElement, Legend } from 'chart.js'

const props = defineProps({
  data: Object,
})

let chart = null
const chartRef = ref(null)

Chart.register(Colors, BarController, CategoryScale, LinearScale, BarElement, Legend)

onMounted(() => {
  chart = new Chart(chartRef.value, {
    type: 'bar',
    data: {
      labels: props.data.labels,
      datasets: [{
        label: 'Users',
        data: props.data.data,
        backgroundColor: 'rgba(99, 102, 241, 0.2)',
        borderColor: 'rgba(99, 102, 241, 1)',
        borderWidth: 2,
      }],
    },
    options: {
      scales: {
        x: {
          grid: {
            display: false,
          },
        },
      },
    },
  })
})

onBeforeUnmount(() => {
  if (chart) {
    chart.destroy()
  }
})
</script>
