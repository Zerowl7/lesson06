<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-16 px-64">
        {{-- button --}}

        <div class="flex pb-6 ">
            <a href="{{ route('admin.categories.index') }}"
                class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">Category Index</a>
        </div>





        {{-- Form --}}
        <div class="bg-slate-700 p-4 rounded-lg">


            <form method="POST" action=" {{ route('admin.categories.store') }} " enctype="multipart/form-data">
                @csrf


                {{-- Name --}}

                <div class="mt-3">
                    <label for="name123"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Name</label>
                    <input id="name" type="text" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                         focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                          dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light @error('name') border-red-400 @enderror"
                        placeholder="Maxim Minaev">

                    @error('name')
                        <div class="text-sm text-red-400 ">{{ $message }}</div>
                    @enderror
                </div>



                {{-- Description --}}

                <div class="mt-6">
                <label for="description"
                    class="block mb-2 text-sm font-medium  text-white dark:text-gray-400">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block p-2.5 w-full text-sm  text-gray-900 bg-gray-50 rounded-lg border border-gray-300
                     focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400
                      dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-400 @enderror"
                    placeholder="Leave a description..."></textarea>
                @error('description')
                    <div class="text-sm text-red-400 ">{{ $message }}</div>
                @enderror
            </div>

                {{-- Choose fail --}}

                <div class="mt-6">
                    <label class="block mb-2 text-sm font-medium text-white dark:text-gray-300" for="image">Upload
                        file</label>
                    <input name="image"
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer
                         dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600
                          dark:placeholder-gray-400 sdsdsd @error('name') border-red-400 @enderror"
                        type="file">

                    <div class="mt-1 text-sm text-gray-300 dark:text-gray-300" id="image">A profile picture
                        is
                        useful
                        to confirm your are logged into your account</div>
                    @error('image')
                        <div class="text-sm text-red-400 ">{{ $message }}</div>
                    @enderror
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
