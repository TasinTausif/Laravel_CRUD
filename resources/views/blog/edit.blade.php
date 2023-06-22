<x-layout>
    <x-form.formError />
    <form method="POST" action="/blogs/{{ $blog->id }}" class="mx-60">
        @csrf
        @method('PATCH')

        <x-form.formData name="title" type="text" :value="old('title', $blog->title)" />
        <x-form.formData name="description" type="text" :value="old('description', $blog->description)" />

        <div class="mb-6 bg-gray-500 text-white rounded-xl py-2 px-4 ">
            <button type="submit" class="bg-gray-500 hover:bg-gray-300 w-full">
                Update
            </button>
        </div>
    </form>

</x-layout>
