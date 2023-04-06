<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h3 class="m-4">
                    Update Blood Donation Date
                </h3>

                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('blood-donations.update', $bloodDonation->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="donation_date">Update Blood Donation Date:</label>
                            <input type="date" id="donation_date" name="donation_date" class="form-control" value="{{$bloodDonation->donation_date}}"required>
                        </div>

                        <x-primary-button type="submit">Update</x-primary-button>
                    </form>

                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
