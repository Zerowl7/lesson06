<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-16 px-64">
        {{-- button --}}

        <div class="flex pb-6 ">
            <a href="{{ route('admin.menus.index') }}"
                class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Menus Index</a>
        </div>

        {{-- Form --}}
        <div class="bg-slate-700 p-4 rounded-lg">

            <form method="POST" action=" {{ route('admin.menus.store') }} " enctype="multipart/form-data">
                @csrf



                {{-- Name --}}

                <div class="mb-6">
                    <label for="name"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Name</label>
                    <input type="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        name="name" placeholder="Maxim Minaev" required>
                </div>

                {{-- Choose fail --}}

                <div class="mt-6">
                    <label class="block mb-2 text-sm font-medium text-white dark:text-gray-300" for="user_avatar">Upload
                        file</label>
                    <input
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 sdsdsd"
                        name="image" type="file">

                    <div class="mt-1 text-sm text-gray-300 dark:text-gray-300" id="user_avatar_help">A profile picture
                        is
                        useful
                        to confirm your are logged into your account</div>
                </div>

                {{-- Price --}}

                <div class="sm:col-span-6 mt-6">
                    <label for="price" class="block text-sm font-medium text-white"> Price </label>
                    <div class="mt-1">
                        <input type="number" min="0.00" max="10000.00" step="0.01" id="price" name="price"
                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                   
                </div>

                {{-- Description --}}
                <div class="sm:col-span-6 pt-5">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-400">Description</label>
                    <textarea name="description" id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a description..."></textarea>

                </div>

                {{-- Choose Category --}}
                <div class="sm:col-span-6 pt-5">
                    <label for="categories" class="block text-sm font-medium text-white">Categories</label>
                    <div class="mt-1">
                        <select id="categories" name="categories[]" class="form-multiselect block w-full mt-1" multiple>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


                {{-- Booton --}}

                <div class="mt-6">
                    <button type="submit"
                        class="text-white px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Store</button>
                </div>

            </form>

        </div>
    </div>
    <style>
        .sdsdsd::-webkit-file-upload-button {
            background: #7779F2;
            border: none;
            outline: none;
            color: white;
            height: 40px;
            width: 140px;


        }
    </style>
</x-admin-layout>
