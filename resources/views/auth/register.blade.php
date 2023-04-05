<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{-- Blood Type --}}

        <div class="mt-4">
            <label for="blood_type", class="block font-medium text-sm text-gray-700">Blood Type</label>
            <select name="blood_type" id="blood_type"
                class="block font-medium text-sm text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option value="" class="block font-medium text-sm text-gray-700">Select Your Blood Type</option>
                <option value="A+" class="block font-medium text-sm text-gray-700">A+</option>
                <option value="A-" class="block font-medium text-sm text-gray-700">A-</option>
                <option value="B+" class="block font-medium text-sm text-gray-700">B+</option>
                <option value="B-" class="block font-medium text-sm text-gray-700">B-</option>
                <option value="AB+" class="block font-medium text-sm text-gray-700">AB+</option>
                <option value="AB-" class="block font-medium text-sm text-gray-700">AB-</option>
                <option value="O+" class="block font-medium text-sm text-gray-700">O+</option>
                <option value="O-" class="block font-medium text-sm text-gray-700">O-</option>
            </select>
            @error('blood_type')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        {{-- Zilla --}}

        <div class="mt-4">
            <label for="zilla_id", class="block font-medium text-sm text-gray-700">Zilla</label>
            <select name="zilla_id" id="zilla_id"
                class="block font-medium text-sm text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option value="" class="block font-medium text-sm text-gray-700">Select Your Zilla</option>

                @foreach ($zillas as $zilla)
                    <option value="{{ $zilla->id }}" class="block font-medium text-sm text-gray-700">
                        {{ $zilla->name }}</option>
                @endforeach
            </select>
        </div>


        {{-- Thana --}}

        <div class="mt-4">
            <label for="thana_id", class="block font-medium text-sm text-gray-700">Thana</label>
            <select name="thana_id" id="thana_id"
                class="block font-medium text-sm text-gray-700 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full">
                <option value="" class="block font-medium text-sm text-gray-700">Select Your Thana</option>
            </select>
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>


    <script>
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
            const filteredThanas = @json($thanas->groupBy('zilla_id'));

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

</x-guest-layout>
