<div class="w-full max-w-screen-2xl md:w-1/3">
    @if ($isVisible)
        <div id="rotating-headings">
            <h1 class="animate__animated animate__pulse text-center text-2xl font-bold md:text-3xl lg:text-4xl">
                Want your project done without agency headaches?
            </h1>
            <h1 class="animate__animated animate__pulse text-center text-2xl font-bold md:text-3xl lg:text-4xl">
                Ready to finally work with developers who actually delivers?
            </h1>
            <h1 class="animate__animated animate__pulse text-center text-2xl font-bold md:text-3xl lg:text-4xl">
                Want results instead of excuses?
            </h1>
        </div>
        <div class="buttons mt-5">
            <flux:button
                wire:click="toggleVisibility"
                variant="primary"
                class="w-full bg-black"
                icon="arrow-trending-up"
            >
                Yes
            </flux:button>
            <div class="text-center">
                <flux:button
                    class="mt-2"
                    icon="arrow-trending-down"
                    @click="if (confirm('Are you sure?')) window.history.back()"
                >
                    No
                </flux:button>
            </div>
        </div>
    @else
        <livewire:contact-us />
    @endif
</div>
@script
    <script>
        let currentIndex = 0;
        const headings = document.querySelectorAll('#rotating-headings h1');

        if (headings.length > 0) {
            headings[0].classList.add('active');
        }

        setInterval(() => {
            headings.forEach((h) => h.classList.remove('active'));
            currentIndex = (currentIndex + 1) % headings.length;
            headings[currentIndex].classList.add('active');
        }, 5000);
    </script>
@endscript
