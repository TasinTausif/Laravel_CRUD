<x-layout>
    <div class="mt-6 pl-96 items-center justify-center">
        <div
            class="max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <form method="POST" action="/blogs/store" class="px-64">
                @csrf
                <x-form.formData name="title" type="text" />
                <x-form.formData name="description" type="textarea" />

                <div
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-500 rounded-lg hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                    <button type="submit">
                        Submit
                    </button>
                </div>

            </form>
        </div>
    </div>

</x-layout>
