<header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-4 lg:px-6">
    <div class="flex items-center">
        <button id="openSidebar" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 mr-2">
            <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
        <h1 class="text-lg font-semibold text-gray-800">@yield('page-title', 'Admin Panel')</h1>
    </div>

    <div class="flex items-center space-x-4">
        <a href="/" target="_blank" class="text-sm text-gray-600 hover:text-orange-500 transition-colors">
            View Site
        </a>
        <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-gradient-to-r from-amber-500 to-orange-500 rounded-full flex items-center justify-center text-white text-sm font-medium">
                {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
            </div>
            <span class="hidden sm:inline text-sm text-gray-700">{{ Auth::user()->name ?? 'Admin' }}</span>
        </div>
    </div>
</header>
