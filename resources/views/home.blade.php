<x-layouts.marketing>
    <div class="sm:flex">
    <hgroup class="py-32 sm:pr-4">
        <h1>Ship mobile app forms, instantly!</h1>
        <p>The AI assistant for product and marketing teams to launch flexible forms, surveys, and A/B tests</p>
        
        <div class="flex flex-col sm:pt-16">
            <x-actions.early_access />
            <div class="flex flex-row pt-2 gap-2">
                <img src="/images/rav.webp" class="w-8 h-8 rounded"/>
                <small class="w-64">Founder-led onboarding with first experiment go-live in 30 mins</small>
            </div>
        </div>
    </hgroup>
    <article>
        <header class="max-w-lg">
            <code>>_ Add a form with name, phone & address. Autocomplete address with cities API. Integrate with hubspot & mixpanel. Make no mistakes ✨</code>
        </header>
        <div class="relative mx-auto border-stone-800 dark:border-stone-400 bg-stone-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px]">
            <div class="h-[32px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
            <div class="h-[64px] w-[3px] bg-stone-800 dark:bg-stone-400 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
            <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-stone-800">
                <form class="px-4 py-32">    
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="Marie Curie" class="w-full">
                    </div>
                    <div>
                        <label for="phone">Phone 📱</label>
                        <input type="number" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="9876543210" class="w-full">
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="Berlin 10249" class="w-full">
                    </div>
                </form>
            </div>
        </div>
        <footer class="text-center"><code>Always on brand</code></footer>
    </article>
    </div>
</x-layouts.marketing>
