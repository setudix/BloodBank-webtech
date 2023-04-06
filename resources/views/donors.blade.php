<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Donor List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="m-4 font-semibold text-xl text-gray-800 leading-tight">
                    Filtered Search
                </h3>

                <div class="m-4 filter-container">
                    <x-primary-button id="filter-button" class="btn btn-primary">Filter</x-primary-button>
                    <div id="filter-menu" class="filter-menu" style="display: none;">
                        <form method="get" action="{{ route('donor-list') }}">
                            <select name="zilla_id" id="zilla_id">
                                <option value="">Select a zilla</option>
                                @foreach ($allZilla as $zilla)
                                    <option value="{{ $zilla->id }}" {{ $zilla->id == $selectedZilla ? 'selected' : '' }}>{{ $zilla->name }}</option>
                                @endforeach
                            </select>
                            <select name="thana_id" id="thana_id">
                                <option value="">Select a thana</option>
                                @foreach ($allThana as $thana)
                                    <option value="{{ $thana->id }}" {{ $thana->id == $selectedThana ? 'selected' : '' }}>{{ $thana->name }}</option>
                                @endforeach
                            </select>
                            <x-primary-button type="submit" class="m-4">Apply filters</x-primary-button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Blood Type
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Zilla
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Thana
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($selectedZilla == null)
                            {{-- @if($selectedZilla == $user->zilla->id) --}}
                            @foreach ($users as $user)

                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </th>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->blood_type }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ isset($user->zilla->name) ? $user->zilla->name : '' }}
                                            
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ isset($user->thana->name) ? $user->thana->name : '' }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.contact', $user->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Contact</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @endif --}}
                            @endif
                            @if($selectedThana != null)
                            {{-- @if($selectedZilla == $user->zilla->id) --}}
                            @foreach ($users as $user)

                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </th>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->blood_type }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ isset($user->zilla->name) ? $user->zilla->name : '' }}
                                            
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ isset($user->thana->name) ? $user->thana->name : '' }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <a href="{{ route('users.contact', $user->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Contact</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- @endif --}}
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('filter-button').addEventListener('click', function() {
            var filterMenu = document.getElementById('filter-menu');
            if (filterMenu.style.display === 'none') {
                filterMenu.style.display = 'block';
                this.innerHTML = 'Hide';
            } else {
                filterMenu.style.display = 'none';
                this.innerHTML = 'Filter';
            }
        });

        // $(document).ready(function() {
        //   $('#zilla_id').on('change', function() {
        //     var zillaId = $(this).val();
        //     if (zillaId) {
        //       $.ajax({
        //         url: '{{ route('get-thanas') }}',
        //         type: 'GET',
        //         data: {zilla_id: zillaId},
        //         dataType: 'json',
        //         success: function(data) {
        //           $('#thana_id').empty();
        //           $('#thana_id').append($('<option>').val('').text('Select a thana'));
        //           $.each(data, function(key, value) {
        //             $('#thana_id').append($('<option>').val(value.id).text(value.name));
        //           });
        //         }
        //       });
        //     } else {
        //       $('#thana_id').empty();
        //       $('#thana_id').append($('<option>').val('').text('Select a thana'));
        //     }
        //   });
        // });

        // Get the zilla and thana select elements
        const zillaSelect = document.querySelector('#zilla_id');
        const thanaSelect = document.querySelector('#thana_id');

        // Listen for changes to the zilla select element
        zillaSelect.addEventListener('change', () => {
            // Clear the existing options from the thana select element
            thanaSelect.innerHTML =
                '<option value="" class="block font-medium text-sm text-gray-700">Select Your Thana</option>';

            // Get the selected zilla ID
            const zillaId = zillaSelect.value;

            // Filter the thanas to only include those that belong to the selected zilla
            const filteredThanas = @json($allThana->groupBy('zilla_id'));

            if (filteredThanas.hasOwnProperty(zillaId)) {
                // Loop through the thanas that belong to the selected zilla and add them as options to the thana select element
                filteredThanas[zillaId].forEach(thana => {
                    const option = document.createElement('option');
                    option.value = thana.id;
                    option.textContent = thana.name;
                    thanaSelect.appendChild(option);
                });
            }
        });
    </script>

</x-app-layout>
