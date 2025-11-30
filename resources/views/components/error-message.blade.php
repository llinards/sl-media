@props(['message' => null])

@if ($message)
    <flux:callout icon="exclamation-triangle" class="mb-4" variant="danger" inline>
        <flux:callout.heading>{{__('An error has occuried!')}}</flux:callout.heading>
        <flux:callout.text>{{ $message }}</flux:callout.text>
    </flux:callout>
@endif


