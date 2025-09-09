@props(['name', 'show' => false])

<div
    x-data="{
        show: {{ $show ? 'true' : 'false' }},
        focusables() {
            // All focusable element types...
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
            return [...$el.querySelectorAll(selector)]
                // All non-disabled elements...
                .filter(el => ! el.hasAttribute('disabled'))
        },
        firstFocusable() { return this.focusables()[0] },
        lastFocusable() { return this.focusables().slice(-1)[0] },
        nextFocusable() {
            let el = this.focusables().find(el => el === document.activeElement)
            if (!el) return this.firstFocusable()
            let index = this.focusables().indexOf(el)
            if (index === this.focusables().length - 1) return this.firstFocusable()
            return this.focusables()[index + 1]
        },
        prevFocusable() {
            let el = this.focusables().find(el => el === document.activeElement)
            if (!el) return this.lastFocusable()
            let index = this.focusables().indexOf(el)
            if (index === 0) return this.lastFocusable()
            return this.focusables()[index - 1]
        },
        close() { this.show = false },
    }"
    x-on:open-modal.window="$event.detail === '{{ $name }}' && (show = true, $nextTick(() => firstFocusable().focus()))"
    x-on:keydown.escape.window="close()"
    x-on:keydown.tab.prevent="nextFocusable().focus()"
    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
    x-show="show"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-0"
    style="display: none;"
>
    <div x-on:click="close()" class="fixed inset-0 bg-black/50" x-show="show" x-transition.opacity></div>
    <div class="bg-white dark:bg-gray-800 rounded-lg p-8 z-10 w-full max-w-md overflow-y-auto" x-show="show" x-transition>
        {{ $slot }}
    </div>
</div>
