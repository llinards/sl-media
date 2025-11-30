@props(['error' => 'form'])

@if ($errors->has($error))
    <div class="mb-4 rounded border border-red-500 bg-red-100 p-4 text-red-500">
        {{ $errors->first($error) }}
    </div>
@endif
