<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-blue-100 rounded-lg py-5 px-6 mb-4 text-base text-blue-700 mb-3" role="alert">
                        You're logged in as Admin!
                    </div>
                    <!-- <h1 class="font-medium leading-tight text-xl mt-0 mb-2 text-blue-600">Laravel Send Email to Everyone</h1>
                    <form  action = "{{ route('send.email') }}" method = "post" >
                    @csrf
                        <div class="container">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send Email</button>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
