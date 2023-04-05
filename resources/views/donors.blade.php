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
                        <form action="" method="GET">
                            <div class="form-group">
                                <label for="filter_option_1">Filter option 1</label>
                                <select id="filter_option_1" name="filter_option_1" class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="option_1_value_1">Option 1 value 1</option>
                                    <option value="option_1_value_2">Option 1 value 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="filter_option_2">Filter option 2</label>
                                <select id="filter_option_2" name="filter_option_2" class="form-control">
                                    <option value="">Select an option</option>
                                    <option value="option_2_value_1">Option 2 value 1</option>
                                    <option value="option_2_value_2">Option 2 value 2</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Apply filters</button>
                        </form>
                    </div>
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
    </script>
    
</x-app-layout>
