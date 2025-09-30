import { createApp, h } from 'vue'
import { Link, createInertiaApp } from '@inertiajs/vue3'
import Layout from './layouts/Layout.vue'

createInertiaApp({
  title: () => 'Inertia v2 Demo',
  resolve: async name => {
    const pages = import.meta.glob('./pages/**/*.vue')
    const page = await pages[`./pages/${name}.vue`]()
    page.default.layout = page.default.layout || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component('Link', Link)
      .mount(el)
  },
  progress: {
    color: '#4f46e5',
  },
})
