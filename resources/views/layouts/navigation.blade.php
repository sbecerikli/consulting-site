<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-12 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('app.home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('app.about') }}
                    </x-nav-link>
                    <x-nav-link :href="route('services.index')" :active="request()->routeIs('services.*')">
                        {{ __('app.services') }}
                    </x-nav-link>
                    <x-nav-link :href="route('sectors.index')" :active="request()->routeIs('sectors.index')">
                        {{ __('app.sectors') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('app.contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Dil Değiştirme -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="flex items-center space-x-2">
                    <a href="{{ route('language.switch', 'tr') }}" 
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ app()->getLocale() === 'tr' ? 'bg-blue-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                        TR
                    </a>
                    <a href="{{ route('language.switch', 'en') }}" 
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ app()->getLocale() === 'en' ? 'bg-blue-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                        EN
                    </a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('app.home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('app.about') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('services.index')" :active="request()->routeIs('services.*')">
                {{ __('app.services') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('sectors.index')" :active="request()->routeIs('sectors.index')">
                {{ __('app.sectors') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                {{ __('app.contact') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Dil Değiştirme -->
        <div class="pt-4 pb-3 border-t border-gray-200 dark:border-gray-600">
            <div class="flex justify-center space-x-4">
                <a href="{{ route('language.switch', 'tr') }}" 
                   class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ app()->getLocale() === 'tr' ? 'bg-blue-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                    TR
                </a>
                <a href="{{ route('language.switch', 'en') }}" 
                   class="px-4 py-2 text-sm font-medium rounded-md transition-colors duration-200 {{ app()->getLocale() === 'en' ? 'bg-blue-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-700' }}">
                    EN
                </a>
            </div>
        </div>
    </div>
</nav>
