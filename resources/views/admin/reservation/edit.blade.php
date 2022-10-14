<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-16 px-64">
        {{-- button --}}

        <div class="flex pb-6 ">
            <a href="{{ route('admin.reservations.index') }}"
                class="px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg">reservation Index</a>
        </div>

        {{-- Form --}}
        <div class="bg-slate-700 p-4 rounded-lg">

            <form method="POST" action=" {{ route('admin.reservations.update', $reservation->id ) }} " >
                @csrf
                @method('PUT')



                {{-- First_Name --}}

                <div class="mb-6">
                    <label for="first_name"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">First Name</label>
                    <input type="name" value="{{ $reservation->first_name }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        name="first_name" placeholder="Maxim" required>
                </div>

                {{-- Last_Name --}}

                <div class="mb-6">
                    <label for="last_name"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Last Name</label>
                    <input type="name" value="{{ $reservation->last_name }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        name="last_name" placeholder="Minaev" required>
                </div>

                {{-- Email --}}

                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Email</label>
                    <input type="email" value="{{ $reservation->email }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        name="email" placeholder="maximminaev7@gmail.com" required>
                </div>

                


                {{-- Phone Number --}}

                <div class="mb-6">
                    <label for="tel_number"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Phone Number</label>
                    <input type="text" value="{{ $reservation->tel_number }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        name="tel_number" placeholder="+79682632507" required>
                </div>

                {{-- Resetvation Date --}}

                <div class="mb-6">
                    <label for="res_date"
                        class="block mb-2 text-sm font-medium text-white dark:text-gray-300">Resetvation Date</label>
                    <input type="datetime-local" id="res_date" value="{{ $reservation->res_date }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        name="res_date" required>
                </div>



                {{-- Guest number --}}

                <div class="sm:col-span-6 mt-6">
                    <label for="guest" class="block text-sm font-medium text-white"> Guest number </label>
                    <div class="mt-1">
                        <input type="number" min="0.00" max="10000.00" step="1" id="guest"
                            name="guest_number" value="{{ $reservation->table_id }}"
                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>

                </div>

                {{-- Table --}}
                <div class="sm:col-span-6 pt-5">
                    <label for="status" class="block text-sm font-medium text-white">Table</label>
                    <div class="mt-1">
                        <select id="table_id" name="table_id"
                            class="h-10 form-multiselect block w-full mt-1 rounded-lg">
                            @foreach ($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }}</option>
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
