<x-forms.modal name="early-access" :show="$errors->earlyAccess->any() || session('early_access_status')">
    <hgroup>
        <h2>You are awesome!</h2>
        <p>Please share your details and we'll come back to you in 24 hours.</p>
    </hgroup>
    @if (session('early_access_status'))
        <div class="mt-4 font-medium text-sm text-center text-green-600 dark:text-green-400">
            {{ session('early_access_status') }}
        </div>
    @else
        @if ($errors->earlyAccess->any())
            <div class="mb-4">
                <div class="font-medium text-red-600 dark:text-red-400">Whoops! Something went wrong.</div>
                <ul class="mt-3 list-disc list-inside text-sm text-red-600 dark:text-red-400">
                    @foreach ($errors->earlyAccess->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('early-access.store') }}" class="mt-4">
            @csrf
            <div class="flex flex-col max-w-sm">
                <label for="email">Work Email</label>
                <input type="email" name="email" id="email" placeholder="email@work.com" autocomplete="on" required class="mb-4" value="{{ old('email') }}">
            
                <label for="tech">Platform</label>
                <select name="tech" id="tech" aria-label="Select your tech stack" required class="mb-4">
                    <option selected disabled value="">
                        Select your primary platform
                    </option>
                    <option value="iOS" @selected(old('tech') == 'iOS')>iOS</option>
                    <option value="Android" @selected(old('tech') == 'Android')>Android</option>
                    <option value="React Native" @selected(old('tech') == 'React Native')>React Native</option>
                    <option value="Flutter" @selected(old('tech') == 'Flutter')>Flutter</option>
                    <option value="Web" @selected(old('tech') == 'Web')>Web</option>
                </select>
            </div>
            <x-actions.button>Get early access ✨</x-actions.button>
        </form>
    @endif
</x-forms.modal>