<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DataTable</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    </head>

    <body>
        </br></br>
        <a href="{{route('create.student')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold mx-auto py-2 px-4 rounded">Create Studnt</a>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold mx-auto py-2 px-4 rounded float-right" href="{{route('dashboard')}}">Back</a></br>

        <div class="container mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="p-8 border-b border-gray-200 shadow">
                    @if (\Session::has('msg'))
                    <div class="text-success  text-center ">
                        <h6 style=" text-align:center !important;"><b>Success! </b>{!! \Session::get('msg') !!}</h6>
                    </div>
                    @endif
                        <table class="divide-y divide-gray-300" id="dataTable">
                            <thead class="bg-black">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-white">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Student Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Father Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Email
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Role Number
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Phone Number
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        DOB
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Address
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Gender
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Province
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        City
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Skills
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Subject
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Image
                                    </th>
                                    <th class="px-6 py-2 text-xs text-white">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <!-- @php
                                $i=0;
                            @endphp -->
                            @php
                            $i=0;
                            @endphp
                            @foreach ($StudentData as $Data)
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr class="text-center whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ ++$i }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $Data->fullname }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $Data->fatname }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                        {{ $Data->email }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $Data->rolnumber }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $Data->phone }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $Data->date }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                        {{ $Data->address }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $Data->gender }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $Data->province }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{ $Data->city }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        @foreach($Data->skills as $skill)

                                        {{$skill}},

                                        @endforeach

                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                    @foreach($Data->subject as $subject)

                                    {{$subject}},

                                    @endforeach
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <img src="/images/{{ $Data->image }}" alt="Student Image">
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('edit.student',$Data->id) }}" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('delete.student',$Data->id) }}" class="inline-block text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('#dataTable').DataTable();

            });
        </script>
    </body>

</html>