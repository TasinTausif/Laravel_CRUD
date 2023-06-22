<x-layout>
    <x-form.formError />
    <form method="POST" action="/login" class="px-64">
        @csrf
        <x-form.formData name="email" type="email" />
        <x-form.formData name="password" type="password" />

        <div class="mb-6 bg-gray-500 text-white rounded-xl py-2 px-4 hover:bg-gray-300">
            <button type="submit" class="bg-gray-500 hover:bg-gray-300 w-full">
                Login
            </button>
        </div>
    </form>
    <div class="px-64 text-blue-400">
        <p>Don't have an account? <a href="/register" class="text-green-600">Register Here!</a></p>
    </div>

</x-layout>
