@php
    $meta = [
        'title' => 'pipeguru.ai | Get early access',
        'description' => 'Share your tech stack details and we\'ll reach out in 24 hours',
    ];
@endphp
<x-layouts.marketing :meta="$meta">
    <div class="py-32">
    <hgroup>
        <h1>You are awesome!</h1>
        <p>Please share your details and we'll come back to you in 24 hours.</p>
    </hgroup>
    <form>
        @csrf
        <div class="flex flex-col w-sm">
            <label for="email">Work Email</label>
            <input type="email" name="email" id="email" placeholder="email@work.com" autocomplete="on" required class="mb-4">
        
            <label for="tech">Platform</label>
            <select name="tech" id="tech" aria-label="Select your tech stack" required class="mb-4">
                <option selected disabled value="">
                    Select your primary platform
                </option>
                <option>iOS</option>
                <option>Android</option>
                <option>React Native</option>
                <option>Flutter</option>
                <option>Web</option>
            </select>
        </div>
        <x-actions.button>Get early access ✨</x-actions.button>
    </form>
    </div>
</x-layouts.marketing>