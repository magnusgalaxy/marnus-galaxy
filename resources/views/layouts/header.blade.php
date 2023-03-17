
    <header class="flex items-center justify-between py-6 lg:py-10">
        {{-- Logo --}}
        <a href="/" class="flex items-center">
            <span href="/" class="mr-2">
                <img src="{{ asset('assets/site-images/logo.svg') }}" alt="logo" />
            </span>
            <p class="hidden font-body text-2xl font-bold text-primary dark:text-white lg:block">{{ config('app.name', 'Magnus Galaxy') }}</p>
        </a>

        {{-- Mobile Nav --}}
        <div class="flex items-center lg:hidden">
            <i class="bx mr-8 cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()" :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'" ></i>
            <svg width="24" height="15" xmlns="http://www.w3.org/2000/svg" @click="isMobileMenuOpen = true" class="fill-current text-primary dark:text-white" >
                <g fill-rule="evenodd"><rect width="24" height="3" rx="1.5" /><rect x="8" y="6" width="16" height="3" rx="1.5" /><rect x="4" y="12" width="20" height="3" rx="1.5" /></g>
            </svg>
        </div>

        {{-- Right Nav --}}
        <div class="hidden lg:block">
            <ul class="flex items-center">
                <li class="group relative mr-6 mb-1">
                    <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
                    <a href="{{ url('/') }}" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Intro</a>
                </li>
              
                <li class="group relative mr-6 mb-1">
                    <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
                    <a href="{{ url('/blogs') }}" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Blog</a>
                </li>
              
              <li class="group relative mr-6 mb-1">
                <div class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow"></div>
                <a href="{{ url('/contact') }}" class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">Contact</a>
              </li>
              
              <li>
                <i class="bx cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()" :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'" ></i>
              </li>
            </ul>
        </div>
    </header>
    <div class="pointer-events-none fixed inset-0 z-50 flex bg-black bg-opacity-80 opacity-0 transition-opacity lg:hidden" :class="isMobileMenuOpen ? 'opacity-100 pointer-events-auto' : ''">
        <div class="ml-auto w-2/3 bg-green p-4 md:w-1/3">
            <i class="bx bx-x absolute top-0 right-0 mt-4 mr-4 text-4xl text-white" @click="isMobileMenuOpen = false"></i>
            <ul class="mt-8 flex flex-col">
                <li>
                    <a href="{{ url('/') }}" class="mb-3 block px-2 font-body text-lg font-medium text-white">Intro</a>
                </li>
                
                <li>
                    <a href="{{ url('/blogs') }}" class="mb-3 block px-2 font-body text-lg font-medium text-white">Blogs</a>
                </li>
                
                <li>
                    <a href="{{ url('/contact') }}" class="mb-3 block px-2 font-body text-lg font-medium text-white">Contact</a>
                </li>

            </ul>
        </div>
    </div>
