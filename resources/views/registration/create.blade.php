<x-layout>
    <x-form.formError />
    <form method="POST" action="/register" class="px-64">
        @csrf
        <x-form.formData name="name" type="text" />
        <x-form.formData name="email" type="email" />
        <x-form.formData name="password" type="password" />

        <div class="mb-6 bg-gray-500 text-white rounded-xl py-2 px-4 hover:bg-gray-300">
            <button type="submit" class="bg-gray-500 hover:bg-gray-300 w-full">
                Register
            </button>
        </div>
    </form>

    <div class="px-64 text-blue-400">
        <p>Already have an account? <a href="/login" class="text-green-600">Login Here!</a></p>
    </div>

</x-layout>
