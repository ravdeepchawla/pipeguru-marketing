<x-layouts.marketing>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
        <hgroup class="pt-16 sm:pt-0">
        <h1>Unlock more revenue per app install</h1>
        <p>Launch AI powered onboarding flows, in-app messages, and A/B tests without new app releases</p>
        <div class="flex flex-col sm:pt-16">
            <x-actions.early_access />
            <div class="flex flex-row pt-2 gap-2">
                <img src="/images/rav.webp" class="w-8 h-8 rounded"/>
                <small class="w-64">Founder-led onboarding with first experiment go-live in 30 mins</small>
            </div>
        </div>
    </hgroup>
    <article>
        <header>
            <code>>_ Add a KYC Step. Ask for country, then conditionally ask for a Passport or Driver's License. Use Veriff as the validation API. On success, tag user in Hubspot. Make no mistakes ✨</code>
        </header>
        <div class="relative mx-auto border-stone-800 dark:border-stone-400 bg-stone-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
            <div class="h-[32px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
            <div class="h-[64px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-stone-800">
                <form class="px-4 py-32">
                    <div>
                        <label for="country">Step 3/3: Country</label>
                        <input type="text" name="country" id="country" placeholder="Germany" class="w-full" autocomplete="country-name">
                    </div>
                    <div class="flex flex-row gap-2 border-s-4 pl-2 stone-border justify-top">
                        <img src="/images/social.webp" class="w-8 h-8 rounded"/>
                        <small class="flex-1">I'm always a bit nervous with ID checks, but this was surprisingly smooth. Finished in under a minute.<div class="stone-color">- Adam W., Product Manager</div></small>   
                    </div>
                </form>
            </div>
        </div>
        <footer class="text-center"><code>Always on brand</code></footer>
    </article>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
            <hgroup>
                <h2>Increase conversions with smarter, multi-step flows</h2>
                <p><x-icons.git-branch /> <strong>Build dynamic flows</strong> with conditional logic that adapts to user answers.</p>
                <p><x-icons.api /> <strong>Connect to any API</strong> for autocomplete, validation and form submission.<p>
                <p><x-icons.bolt /> <strong>Launch and iterate</strong> instantly without engineering or app store releases.<p>
            </hgroup>
            <div class="bg-stone-800 dark:bg-black p-6 rounded-lg font-mono text-sm text-white overflow-x-auto">
<pre><code><span class="text-sky-400">const</span> <span class="text-yellow-300">form</span> = {
    <span class="text-green-400">steps</span>: [
        {
        <span class="text-green-400">field</span>: <span class="text-orange-400">'country'</span>,
        <span class="text-green-400">type</span>: <span class="text-orange-400">'select'</span>,
        },
        {
        <span class="text-green-400">field</span>: <span class="text-orange-400">'city'</span>,
        <span class="text-green-400">type</span>: <span class="text-orange-400">'autocomplete'</span>,
        <span class="text-green-400">api</span>: <span class="text-orange-400">'https://api.example.com/cities?q='</span>,
        <span class="text-purple-400">show_if</span>: {
            <span class="text-green-400">field</span>: <span class="text-orange-400">'country'</span>,
            <span class="text-green-400">is</span>: <span class="text-orange-400">'USA'</span>
        }
        }
    ],
    <span class="text-stone-300">// Manually edit any LLM response</span>
    <span class="text-green-400">copy</span>: {
        <span class="text-green-400">title</span>: <span class="text-orange-400">"Let's get you set up!"</span>
    }
}</code></pre>
            </div>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
        <hgroup class="md:order-last max-w-lg">
            <h2>End the manual data wrangling</h2>
            <p>Your onboarding and user session data can't live in a silo. On submission, instantly sync state with your app, pipe user responses to your CRM and push analytics events.</p>
        </hgroup>
        <div class="md:order-first">
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Hubspot.svg" alt="HubSpot Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Salesforce.svg" alt="Mixpanel Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Zapier.svg" alt="Zapier Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/braze.png" alt="Braze Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Apollo.svg" alt="Apollo Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Firebase.svg" alt="Firebase Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Mixpanel.svg" alt="Mixpanel Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Amplitude.svg" alt="Amplitude Logo" class="h-8"></div>
                <div class="flex items-center justify-center p-8 bg-stone-50 dark:bg-stone-100 rounded-lg"><div class="font-bold text-center text-xl stone-color">and your backend</div></div>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
            <hgroup class="max-w-lg">
                <h2>Ship A/B tests in minutes, not sprints</h2>
                <p>The entire creation process is no-code, designed for speed. Go from idea to a live A/B test in minutes. As results come in, our clear dashboards will show you exactly which version is winning, so you can make data-driven decisions confidently.</p>
            </hgroup>
            <div class="p-6 border border-stone-200 dark:border-stone-700 rounded-lg bg-stone-50 dark:bg-stone-800/50 shadow-lg">
                <h3 class="font-bold text-lg text-stone-900 dark:text-white">Onboarding A/B Test Results</h3>
                <p class="text-sm text-stone-500 dark:text-stone-400">Last 7 days</p>
                <div class="mt-4 grid grid-cols-2 gap-4">
                    <div class="p-4 rounded-md bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-700">
                        <span class="text-sm text-stone-500 dark:text-stone-400">Conversion Rate</span>
                        <div class="sm:flex flex-row items-baseline gap-4"><p class="text-2xl font-bold text-stone-900 dark:text-white">4.3%</p><span class="text-sm stone-color">+14%</span></div>
                    </div>
                    <div class="p-4 rounded-md bg-white dark:bg-stone-900 border-2 border-green-500">
                        <span class="text-sm text-green-600 dark:text-green-400 font-semibold">Winner: Variant B</span>
                        <p class="text-2xl font-bold text-stone-900 dark:text-white">92% <span class="text-sm font-normal stone-color">probability</span></p>
                    </div>
                </div>
                <div class="mt-4 space-y-2">
                    <p class="text-sm font-medium text-stone-600 dark:text-stone-300">Completions by Variant</p>
                    <div class="w-full">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs w-16">Variant A</span>
                            <div class="w-full bg-stone-200 dark:bg-stone-700 rounded-full h-4">
                                <div class="bg-sky-500 h-4 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs w-16">Variant B</span>
                            <div class="w-full bg-stone-200 dark:bg-stone-700 rounded-full h-4">
                                <div class="bg-green-500 h-4 rounded-full" style="width: 82%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
        <hgroup class="md:order-last max-w-lg">
            <h2>Stop gambling with your permission prompts</h2>
            <p>Optimize your app's most crucial moments. A/B test the timing and copy of native iOS & Android permission prompts for Camera, Notifications, Location, and more. Find the perfect approach to maximize opt-in rates.</p>
        </hgroup>
        <div class="md:order-first flex justify-center">
        <div class="relative mx-auto border-stone-800 dark:border-stone-400 bg-stone-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
            <div class="h-[32px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
            <div class="h-[64px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-stone-100 dark:bg-stone-800">     
                    <div class="p-4 bg-white dark:bg-stone-900 mx-4 my-32 rounded-lg">
                        <hgroup>
                        <h4>Enable Notifications?</h4>
                        <p>Get notified when your food arrives.</p>
                        </hgroup>
                        <div class="flex flex-row gap-2 justify-content items-center">
                           <div class="w-1/2 text-sky-500 font-semibold">Maybe Later</div>
                           <div class="w-1/2 bg-sky-500 rounded py-1 text-white text-center font-semibold">Enable</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
        <div>
        <hgroup>
            <h2>Simple for developers, powerful for You</h2>
            <p>Our lightweight SDKs are a breeze for engineers to install. With simple hooks to trigger experiences, they get an easy integration while you get full, sandboxed control to build and launch flows without touching the core app code.</p>
        </hgroup>
        <div class="grid grid-cols-4 gap-4">
            <div class="flex items-center justify-center p-2 sm:p-4 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/ReactNative.svg" alt="React Native Logo" class="h-8"></div>
            <div class="flex items-center justify-center p-2 sm:p-4 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Flutter.svg" alt="Flutter Logo" class="h-8"></div>
            <div class="flex items-center justify-center p-2 sm:p-4 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/iOS.svg" alt="iOS Logo" class="h-16"></div>
            <div class="flex items-center justify-center p-2 sm:p-4 bg-stone-50 dark:bg-stone-100 rounded-lg"><img src="/images/logos/Android.svg" alt="Android Logo" class="h-8"></div>
        </div>
        </div>
        <div class="bg-stone-800 dark:bg-black p-6 rounded-lg font-mono text-sm text-white overflow-x-auto">
<pre><code><span class="text-sky-400">import</span> <span class="text-yellow-300">pipeguru</span> <span class="text-sky-400">from</span> <span class="text-orange-400">'@pipeguru/sdk'</span>;

<span class="text-stone-300">// Trigger an experience after user signs up</span>
<span class="text-yellow-300">pipeguru</span>.<span class="text-green-400">trigger</span>(<span class="text-orange-400">'user-signed-up'</span>);

<span class="text-stone-300">// Or show a specific experience manually</span>
<span class="text-yellow-300">pipeguru</span>.<span class="text-green-400">show</span>(<span class="text-orange-400">'kyc-form'</span>);

<span class="text-stone-300">// Seamlessly change the UI behind the flow id kyc-form anytime</span>
</code></pre>
        </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center">
        <hgroup class="md:order-last max-w-lg">
            <h2>Your data, your control. Security by design.</h2>
            <p>Choose the security model that fits your company's needs. Whether you prefer a managed solution or need to keep data within your own infrastructure, PipeGuru provides an architecture built on trust and control.</p>
        </hgroup>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <article class="text-center">
                <x-icons.cloud-lock class="h-12 w-12 mx-auto blue mb-4" />
                <hgroup>
                <h3>PipeGuru Hosted</h3>
                <p class="text-sm">Our secure solution uses a self-hosted Supabase instance with row-level security enabled by default. Your data is always segregated and protected.</p>
                </hgroup>
            </article>
            <article class="text-center">
                <x-icons.building-warehouse class="h-12 w-12 mx-auto blue mb-4" />
                <hgroup>
                <h3>Warehouse Native</h3>
                <p class="text-sm">For maximum control, deploy PipeGuru in your own cloud. Your sensitive user data never leaves your VPC, ensuring full compliance and ownership.</p>
                </hgroup>
            </article>
        </div>
    </section>
    
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-8 items-center" id="pricing">
        <hgroup class="max-w-lg">
            <h2>Ridiculously good value</h2>
            <p>$199 per month during the early access phase. Risk-free, cancel anytime. Enterprise plans coming soon.</p>
        </hgroup>
        <article>
            <div class="flex flex-row items-baseline gap-2"> 
                <h2>$199</h2>
                <span class="stone-color text-sm">per month</span>
            </div>
            <ul class="list-none p-0">
                <li class="flex items-center gap-2"><span class="text-emerald-500"><x-icons.checkbox /></span> AI Assistant to build forms</li>
                <li class="flex items-center gap-2"><span class="text-emerald-500"><x-icons.checkbox /></span> Unlimited Forms, Surveys & A/B Tests</li>
                <li class="flex items-center gap-2"><span class="text-emerald-500"><x-icons.checkbox /></span> Dynamic flows & conditional logic</li>
                <li class="flex items-center gap-2"><span class="text-emerald-500"><x-icons.checkbox /></span> All current & future integrations</li>
                <li class="flex items-center gap-2"><span class="text-emerald-500"><x-icons.checkbox /></span> Unlimited team members</li>
                <li class="flex items-center gap-2"><span class="text-emerald-500"><x-icons.checkbox /></span> Founder-led onboarding & support</li>
            </ul>
        </article>
    <x-forms.early />
</x-layouts.marketing>
