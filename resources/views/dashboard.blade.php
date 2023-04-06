<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="m-4">
                    Add new blood donation date
                </h3>
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('blood-donations.create') }}">
                        @csrf

                        <div class="form-group">
                            <label for="donation_date">Add Blood Donation Date:</label>
                            <input type="date" id="donation_date" name="donation_date" class="form-control" required>
                        </div>

                        <x-primary-button type="submit">Add</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="m-4">
                    Your Latest Donations
                </h3>
                <div class="p-6 text-gray-900">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4 rounded focus:outline-none focus:shadow-outline"
                        onclick="toggleBloodDonationList()" id="listButton">Show</button>
                    <div id="bloodDonationList" class="hidden">
                        @if (count($bloodDonations) == 0)
                            <p>You have not donated blood yet.</p>
                        @else
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Date (yyy/mm/dd)
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bloodDonations as $bloodDonation)
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $bloodDonation->donation_date }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    <a href="{{ route('bloodDonation.edit',  $bloodDonation->id) }}"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <form action="{{ route('bloodDonation.destroy', $bloodDonation->id) }}"
                                                          method="POST"
                                                          onsubmit="return confirm('Are you sure you want to delete this entry?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleBloodDonationList() {
            var listContainer = document.getElementById("bloodDonationList");
            var button = document.getElementById("listButton");

            if (listContainer.classList.contains("hidden")) {
                listContainer.classList.remove("hidden");
                button.textContent = "Hide";
            } else {
                listContainer.classList.add("hidden");
                button.textContent = "Show";
            }
        }
    </script>
</x-app-layout>
