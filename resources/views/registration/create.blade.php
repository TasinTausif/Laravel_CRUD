<x-layout>
    <div class="mt-6 flex items-center justify-center">
        <div
            class="max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <x-form.formError />
            <form method="POST" action="/register" class="px-64">
                @csrf
                <x-form.formData name="name" type="text" />
                <x-form.formData name="email" type="email" />
                <x-form.formData name="password" type="password" />

                <div
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-500 rounded-lg hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                    <button type="submit">
                        Register
                    </button>
                </div>
            </form>
            <div class="px-64 text-blue-400 mt-6">
                <p>Already have an account? <a href="/login" class="text-green-600">Login Here!</a></p>
            </div>
        </div>
    </div>

</x-layout>
