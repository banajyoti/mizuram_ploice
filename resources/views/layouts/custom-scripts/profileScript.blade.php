<!-- Include jQuery (only if it's not already included in your layout) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // AJAX Form Submission
    $(document).ready(function() {
        $('#save-proceed-btn').on('click', function(e) {
            e.preventDefault();

            var formData = new FormData($('#profile-form')[0]);

            // Send AJAX POST request
            $.ajax({
                url: '{{ route('profile') }}', // Change to your route
                type: 'POST',
                data: formData,
                processData: false, // Important for file uploads
                contentType: false, // Important for file uploads
                success: function(response) {
                    if (response.success) {
                        // Success alert with SweetAlert2
                        Swal.fire({
                            title: 'Success!',
                            text: response.message, // Show success message
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#2DB325'
                        }).then(() => {
                            // Redirect after the user clicks "OK" on the success message
                            window.location.href = '/document'; // Redirect URL
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error: " + error);

                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        // Collect all validation errors
                        var errorMessages = "";
                        $.each(xhr.responseJSON.errors, function(key, value) {
                            errorMessages += value.join(", ") +
                                "\n"; // Join multiple errors for the same field
                        });

                        // Display SweetAlert2 with validation errors
                        Swal.fire({
                            title: 'Validation Error!',
                            text: errorMessages, // Display error messages
                            icon: 'error',
                            confirmButtonText: 'Try Again',
                            confirmButtonColor: '#2DB325'
                        });
                    } else {
                        // General error alert in case of AJAX failure (e.g., server error)
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while submitting the form.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#2DB325'
                        });
                    }
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get elements for permanent and correspondence district containers
        const pStateId = document.getElementById('p_state_id');
        const cStateId = document.getElementById('c_state_id');
        const checkBox = document.getElementById('checkBox');
        const districtSelectCorrespondence = document.getElementById('c_district-container');
        const districtTextboxCorrespondence = document.getElementById('c_district-textbox-container');
        const districtSelectPermanent = document.getElementById('district-container');
        const districtTextboxPermanent = document.getElementById('district-textbox-container');
        const pDistrictId = document.getElementById('p_district_id');
        const cDistrictId = document.getElementById('c_district_id');
        const districtTextPermanent = document.getElementById('district-text');
        const districtTextCorrespondence = document.getElementById('c_district-text');

        // Function to toggle visibility of district fields based on state value
        function toggleDistrictFields(stateElement, districtSelect, districtTextbox) {
            let stateValue = stateElement.value;
            if (stateValue === '17') {
                districtSelect.classList.remove('hidden');
                districtTextbox.classList.add('hidden');
            } else {
                districtSelect.classList.add('hidden');
                districtTextbox.classList.remove('hidden');
            }
        }

        // Initial check for Permanent and Correspondence Address based on page load values
        toggleDistrictFields(pStateId, districtSelectPermanent, districtTextboxPermanent);
        toggleDistrictFields(cStateId, districtSelectCorrespondence, districtTextboxCorrespondence);

        // Handle state change for Permanent Address
        pStateId.addEventListener('change', function() {
            toggleDistrictFields(pStateId, districtSelectPermanent, districtTextboxPermanent);
        });

        // Handle state change for Correspondence Address
        cStateId.addEventListener('change', function() {
            toggleDistrictFields(cStateId, districtSelectCorrespondence, districtTextboxCorrespondence);
        });

        // Function to fill correspondence address when checkbox is checked
        checkBox.addEventListener('change', function() {
            if (checkBox.checked) {
                // Copy values from Permanent Address to Correspondence Address
                document.getElementById('c_address1').value = document.getElementById('p_address1')
                    .value;
                document.getElementById('c_address2').value = document.getElementById('p_address2')
                    .value;
                document.getElementById('c_post_office').value = document.getElementById(
                    'p_post_office').value;
                document.getElementById('c_police_id').value = document.getElementById('p_police_id')
                    .value;
                document.getElementById('c_pin').value = document.getElementById('p_pin').value;

                // Copy district values as well
                cDistrictId.value = pDistrictId.value;

                // Copy state value
                document.getElementById('c_state_id').value = pStateId.value;

                // Copy other district values as well
                document.getElementById('c_district-text').value = document.getElementById(
                    'district-text').value;

                // Make the Correspondence fields readonly
                makeFieldsReadonly(true);

                // Ensure district2 shows as per the logic (text or select box)
                toggleDistrictFields(cStateId, districtSelectCorrespondence,
                    districtTextboxCorrespondence);
            } else {
                // Clear Correspondence fields if checkbox is unchecked
                document.getElementById('c_address1').value = '';
                document.getElementById('c_address2').value = '';
                document.getElementById('c_post_office').value = '';
                document.getElementById('c_state_id').value = '';
                document.getElementById('c_district_id').value = '';
                document.getElementById('c_district-text').value = '';
                document.getElementById('c_police_id').value = '';
                document.getElementById('c_pin').value = '';
                cDistrictId.value = ''; // Clear district2

                // Make the Correspondence fields editable
                makeFieldsReadonly(false);

                // Show the district textbox for Correspondence Address
                toggleDistrictFields(cStateId, districtSelectCorrespondence,
                    districtTextboxCorrespondence);
            }
        });

        // Helper function to make fields readonly
        function makeFieldsReadonly(isReadonly) {
            const fields = [
                'c_address1', 'c_address2', 'c_post_office', 'c_police_id', 'c_pin', 'c_district-text'
            ];

            fields.forEach(function(fieldId) {
                const field = document.getElementById(fieldId);
                if (isReadonly) {
                    field.setAttribute('readonly', true);
                    field.classList.add('readonly-field');
                } else {
                    field.removeAttribute('readonly');
                    field.classList.remove('readonly-field');
                }
            });
        }
    });
</script>

<script>
    $('input[type=text], textarea').keyup(function() {
        $(this).val(function() {
            return this.value.toUpperCase();
        })
    });
</script>
