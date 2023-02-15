<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Log Activity Table') }}
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
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">ID</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Log Name</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Description</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject Type</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Event</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Subject ID</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Causer Type</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Causer ID</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Properties</th>
                                    <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Batch UUID</th>
                                </tr>
                            </thead>
                            <tbody class="block md:table-row-group">
                                <!-- @php
                                $i=0;
                                @endphp -->
                                <tr id="" class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Id</span>
                                        {{ $lastActivity->id }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Log Name</span>
                                        {{ $lastActivity->log_name }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Description</span>
                                        {{ $lastActivity->description }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Subject Type</span>
                                        {{ $lastActivity->subject_type }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Event</span>
                                        {{ $lastActivity->event }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Subject ID</span>
                                        {{ $lastActivity-> subject_id}}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Causer Type</span>
                                        {{ $lastActivity->causer_type }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Causer ID</span>
                                        {{ $lastActivity->causer_id }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Properties</span>
                                        {{ $lastActivity->properties }}
                                    </td>
                                    <td onClick='fetchRecords();' class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Batch UUID</span>
                                        {{ $lastActivity->batch_uuid }}
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