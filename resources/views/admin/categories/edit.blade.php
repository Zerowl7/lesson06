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


            <form method="POST" action=" {{ route('admin.categories.update', $category->id) }} " enctype="multipart/form-data">
                @csrf
                @method('PUT')


                {{-- Name --}}

                <div class="mb-6">
                    <label for="name123"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Name</label>
                    <input id="name" type="text" name="name" value="{{ $category->name }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Maxim Minaev" required>
                </div>

                {{-- Description --}}

                <label for="description"
                    class="block mb-2 text-sm font-medium  text-white dark:text-gray-400">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block p-2.5 w-full text-sm  text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Leave a description...">
                {{ $category->description }}
                </textarea>


                {{-- Choose fail --}}

                <div class="mt-6">
                    <label class="block mb-2 text-sm font-medium text-white dark:text-gray-300" for="image">Upload
                        file</label>

                        <div>
                           <img class="w-32 h-32" src="{{ Storage::url($category->image) }}"> 
                        </div>


                    <input name="image"
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 sdsdsd"
                        type="file">

                    <div class="mt-1 text-sm text-gray-300 dark:text-gray-300" id="image">A profile picture
                        is
                        useful
                        to confirm your are logged into your account</div>
                </div>

                {{-- Booton --}}

                <div class="mt-6">
                    <button type="submit"
                        class="text-white px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg">Update</button>
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
