<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <aside id="table_data">
                        <!-- <div class="flex flex-wrap justify-center">
                            <div class="mb-4">
                                <img class="w-50 h-40 rounded-full" src="/images/{{ Auth::user()->image }}" alt=" ">
                            </div>
                        </div> -->
                        <table class="min-w-full border-collapse block md:table">
                            <thead class="block md:table-header-group">
                                    <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">No</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Image</th>
                                </tr>
                            </thead>
                            <tbody class="block md:table-row-group">
                                @php
                                $i=0;
                                @endphp
                                <tr id="" class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">No</span>
                                        {{ ++$i }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Name</span>
                                        {{ Auth::user()->name }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Email</span>
                                        {{ Auth::user()->email }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell justify-center">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Image</span>
                                        <img class="w-15 h-10" src="/images/{{ Auth::user()->image }}" alt=" ">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>