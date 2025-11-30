<div id="section-contact-us">
    <x-error-message :message="session('error')"/>
    <x-success-message :message="session('success')"/>
    <form wire:submit="submit">
        <x-honeypot livewire-model="extraFields"/>

        <flux:field>
            <flux:input badge="Required" label="Your Name" wire:model="customer_name" type="text"/>
        </flux:field>
        <flux:field class="mt-4">
            <flux:input badge="Optional" label="Company Name" wire:model="company_name" type="text"/>
        </flux:field>
        <flux:field class="mt-4">
            <flux:input badge="Required" label="Your e-mail" wire:model="email" type="email"/>
        </flux:field>
        <flux:field class="mt-4">
            <flux:input badge="Optional" label="Your phone" wire:model="phone" type="tel"/>
        </flux:field>
        <flux:field class="mt-4">
            <flux:textarea
                badge="Required"
                label="Your Question"
                wire:model="question"
                placeholder="Tell us your wishlist, or any other question you may have..."
            />
        </flux:field>
        <flux:field class="mt-4">
            <flux:checkbox
                label="I agree that my submitted data will be stored and processed for the purpose of responding to my inquiry."
                wire:model="terms"
            />
        </flux:field>
        <flux:field class="mt-4">
            <flux:checkbox label="Keep me updated — I want to receive news and updates." wire:model="newsletter"/>
        </flux:field>
        <div class="flex justify-center">
            <flux:button variant="primary" icon="envelope" class="mt-6 bg-black" type="submit">
                {{ __('Send') }}
            </flux:button>
        </div>
    </form>
</div>
@script
<script>
    Livewire.on('scrollToTop', () => {
        document.getElementById('section-contact-us').scrollIntoView({behavior: 'smooth', block: 'center'});
    });
</script>
@endscript
