<div class="text-xs mt-2 bg-gray-200">
    @if ($errors->any())
        <div class="p-4">
            <h2 class="mb-2 text-lg font-semibold text-gray-900">
                {{ __('Please correct the following fields:') }}
            </h2>
            <ul class="max-w-md space-y-1 text-red-500 list-disc list-inside dark:text-red-400">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
