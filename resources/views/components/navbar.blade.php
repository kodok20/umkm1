<nav class="bg-gray-800" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
              <div class="shrink-0">
                  <img class="h-8 w-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
              </div>
              <div class="hidden md:block">
                  <div class="ml-10 flex items-baseline space-x-4">
                      <!-- Navigation links -->
                      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                      <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
                      <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                      <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                      <x-nav-link href="/umkms" :active="request()->is('umkms')">Umkm</x-nav-link>
                      <x-nav-link href="/login" :active="request()->is('login')">login</x-nav-link>
                  </div>
              </div>
          </div>
          <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                  <!-- Profile dropdown -->
                  <div class="relative ml-3">
                      <div>
                          <button @click="isOpen = !isOpen" type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                              <span class="sr-only">Open user menu</span>
                              <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                          </button>
                      </div>
                      <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profile</a>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="-mr-2 flex md:hidden">
              <button @click="isOpen = !isOpen" type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="sr-only">Open main menu</span>
                  <svg :class="{'hidden': isOpen, 'block': !isOpen}" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                  </svg>
                  <svg :class="{'block': isOpen, 'hidden': !isOpen}" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>
      </div>
  </div>

  <!-- Mobile menu -->
  <div x-show="isOpen" class="md:hidden">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
          <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
          <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
          <x-nav-link href="/umkms" :active="request()->is('umkms')">umkm</x-nav-link>
      </div>
  </div>
</nav>
