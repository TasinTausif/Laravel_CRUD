<x-layout>
    <form method="POST" action="/blogs/store" class="px-64">
        @csrf
        <x-formData name="title" type="text" />
        <x-formData name="description" type="text" />

        <div class="mb-6">
            <button type="submit" class="bg-gray-500 text-white rounded py-2 px-4 hover:bg-gray-300">
                Submit
            </button>
        </div>

    </form>

</x-layout>
