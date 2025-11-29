<x-layouts.main :title="__('Welcome')">
    <main class="flex w-full flex-col items-center justify-center">
        <x-app-logo-icon />
        <livewire:introduction />
    </main>
    {{-- <footer> --}}
    {{-- <flux:text>&copy; {{ now()->year }} {{__('S&L Media SIA')}}</flux:text> --}}
    {{-- <flux:text class="mt-1" --}}
    {{-- >{{__('Enerģētikas iela 2-5, Mālpils, Siguldas novads, Latvija, LV-2152')}}</flux:text> --}}
    {{-- <flux:text class="mt-1">{{__('Registration number:')}} 40203531461</flux:text> --}}
    {{-- <flux:text class="mt-1">{{__('E-mail:')}} --}}
    {{-- <flux:link href="mailto:linards@slmedia.lv">linards@slmedia.lv</flux:link> --}}
    {{-- </flux:text> --}}
    {{-- <flux:text class="mt-1">{{__('Phone:')}} --}}
    {{-- <flux:link href="tel:+37128324128">+371 2 83 24 128</flux:link> --}}
    {{-- </flux:text> --}}
    {{-- </footer> --}}
</x-layouts.main>
