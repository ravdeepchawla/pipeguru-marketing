<header class="sticky top-0 z-50 py-4 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <nav class="flex flex-row justify-between items-center">
    <a href="/">
        <x-nav.logo.icon_text />
    </a>
    @if(!request()->routeIs('early'))
    <x-actions.early_access />
    @endif
    </nav>
</header>