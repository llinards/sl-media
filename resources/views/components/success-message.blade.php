@props(['message' => null])

@if ($message)
    <flux:callout icon="check-circle" class="mb-4" variant="success" inline>
        <flux:callout.heading>{{ __('Success!') }}</flux:callout.heading>
        <flux:callout.text>{{ $message }}</flux:callout.text>
    </flux:callout>
@endif
