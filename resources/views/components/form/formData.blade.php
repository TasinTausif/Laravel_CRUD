@props(['name', 'type'])

<div class="mb-6">
    <label for={{ $name }} class="block my-2 uppercase font-bold text-xs text-gray-700">
        {{ ucwords($name) }}
    </label>

    <input class="border border-gray-400 p-2 w-full rounded @error('{{ $name }}') is-invalid @enderror"
        type={{ $type }} name={{ $name }} id={{ $name }}
        {{ $attributes(['value' => old($name)]) }}>

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
