// Get the zilla and thana select elements
const zillaSelect = document.querySelector('#zilla_id');
const thanaSelect = document.querySelector('#thana_id');

// Listen for changes to the zilla select element
zillaSelect.addEventListener('change', () => {
    // Clear the existing options from the thana select element
    thanaSelect.innerHTML = '<option value="" class="block font-medium text-sm text-gray-700">Select Your Thana</option>';

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