<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- Table --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Button --}}

            <div class="flex justify-end  pb-6">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg"> New Category</a>
            </div>

            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">

                <div class="overflow-x-auto relative">


                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Name
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Image
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Description
                                </th>

                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                    <td class="py-4 px-6">
                                        {{ $category->name }}
                                    </td>

                                    <td class="py-4 px-6">
                                        <img src="{{ Storage::url($category->image) }}" class="w-16 h-16 rounded">
                                    </td>

                                    <td class="py-4 px-6">
                                        {{ $category->description }}
                                    </td>

                                    {{-- Edit --}}

                                    <td class="py-4 px-6">

                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                class="px-4
                                            py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                            
                                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                method="POST"
                                                action="{{ route('admin.categories.destroy', $category->id) }}"
                                                onsubmit="return confirm('Are you sure?');"
                                                enctype='multipart/form-data'>
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit">Delete</button>


                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
