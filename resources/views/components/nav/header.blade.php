<header class="pb-4">
    <nav class="flex flex-row justify-between items-center">
    <a href="/">
        <x-nav.logo.icon_text />
    </a>
    @if(!request()->routeIs('early'))
    <x-actions.early_access />
    @endif
    </nav>
</header>