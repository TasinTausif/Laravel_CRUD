<x-layout>
    <form method="POST" action="/login" class="px-64">
        @csrf
        <x-formData name="email" type="email" />
        <x-formData name="password" type="password" />

        <div class="mb-6 bg-gray-500 text-white rounded-xl py-2 px-4 hover:bg-gray-300">
            <button type="submit" class="bg-gray-500">
                Login
            </button>
        </div>
    </form>

</x-layout>
