<template>
  <div>
    <header class="py-5 border-b-2 border-indigo-600">
      <div class="max-w-screen-xl px-4 mx-auto flex items-center">
        <h1 class="relative px-2 py-0.5 text-white text-lg font-black before:bg-indigo-600 before:content-[''] before:z-[-1] before:absolute before:inset-0 before:-rotate-1">
          Inertia v2 Demo
        </h1>

        <nav class="ml-12">
          <ul class="flex space-x-6">
            <li>
              <Link
                href="/polling"
                class="text-sm font-bold"
                :class="$page.url.startsWith('/polling') ? 'text-indigo-600' : 'hover:text-indigo-600'"
              >
                Polling
              </Link>
            </li>
            <li>
              <Link
                href="/prefetching"
                class="text-sm font-bold"
                :class="$page.url.startsWith('/prefetching') ? 'text-indigo-600' : 'hover:text-indigo-600'"
              >
                Prefetching
              </Link>
            </li>
            <li>
              <Link
                href="/deferred-props"
                class="text-sm font-bold"
                :class="$page.url.startsWith('/deferred-props') ? 'text-indigo-600' : 'hover:text-indigo-600'"
              >
                Deferred props
              </Link>
            </li>
            <li>
              <Link
                href="/infinite-scrolling"
                class="text-sm font-bold"
                :class="$page.url.startsWith('/infinite-scrolling') ? 'text-indigo-600' : 'hover:text-indigo-600'"
              >
                Infinite scrolling
              </Link>
            </li>
            <li>
              <Link
                href="/lazy-loading"
                class="text-sm font-bold"
                :class="$page.url.startsWith('/lazy-loading') ? 'text-indigo-600' : 'hover:text-indigo-600'"
              >
                Lazy loading
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
