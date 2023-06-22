<x-layout>
    <x-form.formError />
    <form method="POST" action="/blogs/store" class="px-64">
        @csrf
        <x-form.formData name="title" type="text" />
        <x-form.formData name="description" type="text" />

        <div class="mb-6">
            <button type="submit" class="bg-gray-500 text-white rounded py-2 px-4 hover:bg-gray-300">
                Submit
            </button>
        </div>

    </form>

</x-layout>
