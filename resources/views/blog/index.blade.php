<x-layout>

    {{-- Nav Bar --}}
    <div class="mx-60 top-0">
        @auth
            <div class="text-left">
                <a href="/blogs/create"
                    class="bg-green-600 hover:bg-green-200 rounded-xl text-white py-3 px-5 text-xs font-bold uppercase mx-1">Add
                    New</a>
            </div>
        @endauth

        @guest
            <div class="text-right">
                <a href="/login"
                    class="bg-blue-600 hover:bg-blue-400 rounded-xl text-white py-3 px-5 text-xs font-bold uppercase mx-1">Log
                    In</a>

                <a href="/register"
                    class="bg-blue-600 hover:bg-blue-400 rounded-xl text-white py-3 px-5 text-xs font-bold uppercase">Register</a>
            </div>
        @endguest
    </div>

    {{-- Table --}}
    <div class="container max-w-7xl mx-auto mt-3">
        <div class="flex justify-center">
            <div class="w-2/3 text-sm ">
                <table>
                    <thead>
                        <tr>
                            <x-table.head name="id" />
                            <x-table.head name="title" />
                            <x-table.head name="description" />
                            <x-table.head name="author" />
                            <x-table.head name="created" />
                            @can('admin')
                                <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50"
                                    colspan="3">
                                    ACTION</th>
                            @endcan
                        </tr>
                    </thead>

                    <tbody class="bg-white">
                        @foreach ($blogs as $blog)
                            <tr>
                                <x-table.data>
                                    <div class="flex items-center">
                                        {{ $blog->id }}
                                    </div>
                                </x-table.data>
                                <x-table.data>
                                    <div class="text-sm leading-5 text-gray-900">
                                        {{ $blog->title }}
                                    </div>
                                </x-table.data>
                                <x-table.data>
                                    <p>
                                        {{ $blog->description }}
                                    </p>
                                </x-table.data>
                                <x-table.data>
                                    <div class="flex items-center">
                                        {{ $blog->author->name }}
                                    </div>
                                </x-table.data>
                                <x-table.data class="text-sm leading-5 text-gray-500">
                                    <span>{{ $blog->created_at->diffForHumans() }}</span>
                                </x-table.data>

                                @can('admin')
                                    <td
                                        class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                        <a href="{{ route('edit', ['blog' => $blog->id]) }}"
                                            class="text-indigo-600 hover:text-indigo-900">
                                            <x-icon name="edit" />
                                        </a>
                                    </td>
                                    <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                        <form method="POST" action="/blogs/{{ $blog->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button>
                                                <x-icon name="delete" />
                                            </button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- @if (\Session::has('failed'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('failed') !!}</li>
            </ul>
        </div>
    @endif --}}
</x-layout>
