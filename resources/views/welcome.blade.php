<!-- State -->
<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2">
    <div class="h-full flex flex-col">
        <label for="State" class="block mb-auto px-1 text-sm font-medium text-gray-600">
            State<span class="ps-1 text-red-500">*</span>
        </label>
        <select id="p_state_id" name="permanent_address[p_state_id]"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
            required>
            <option value="" selected disabled>Select</option>
            @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- District -->
<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2" id="district-container">
    <div class="h-full flex flex-col">
        <label for="district" class="block mb-auto px-1 text-sm font-medium text-gray-600">
            District<span class="ps-1 text-red-500">*</span>
        </label>
        <select id="p_district_id" name="permanent_address[district]"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
            required>
            <option value="">Select</option>
            @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
            @endforeach
        </select>
    </div>
</div>

<!-- Text box for District (initially hidden) -->
<div class="col-span-12 md:col-span-6 lg:col-span-3 xl:col-span-2 hidden" id="district-textbox-container">
    <div class="h-full flex flex-col">
        <label for="district-text" class="block mb-auto px-1 text-sm font-medium text-gray-600">
            District (Please specify)<span class="ps-1 text-red-500">*</span>
        </label>
        <input type="text" id="district-text" name="permanent_address[district_text]"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2" />
    </div>
</div>

<script>
    // JavaScript to handle dynamic change
    document.getElementById('p_state_id').addEventListener('change', function() {
        var stateId = this.value;
        var districtSelect = document.getElementById('district-container');
        var districtTextbox = document.getElementById('district-textbox-container');
        
        if (stateId == '2') { // If state ID is 2, show text box and hide select
            districtSelect.classList.add('hidden');
            districtTextbox.classList.remove('hidden');
        } else {
            districtSelect.classList.remove('hidden');
            districtTextbox.classList.add('hidden');
        }
    });
</script>