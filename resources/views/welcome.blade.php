<script>
  $(document).ready(function() {
    // Object to store the selected values for all sections
    var formData = {};

    // Function to handle radio button selection and AJAX post for each section
    function submitRadioData(sectionName) {
        // Collect the selected value from the radio buttons for this section
        var selectedValue = $('input[name="' + sectionName + '"]:checked').val() || '';  // Default to empty string if not selected

        console.log('Selected Value for ' + sectionName + ':', selectedValue);

        // Store the selected value in the formData object
        formData[sectionName] = selectedValue;

        // Determine display text for the selected value
        var displayText = selectedValue === '1' ? 'Yes, I have.' : 'No, I haven\'t.';

        // Update the corresponding <p> tag
        if (sectionName === 'min_score_mizo') {
            $('#min_score_display').text('Answer: ' + displayText);
        } else if (sectionName === 'class_x_mizo') {
            $('#class_x_display').text('Answer: ' + displayText);
        } else if (sectionName === 'mizo_as_mil') {
            $('#mizo_as_mil_display').text('Answer: ' + displayText);
        } else if (sectionName === 'comp_cert') {
            $('#comp_cert_display').text('Answer: ' + displayText);
        } else if (sectionName === 'ncc_cert') {
            $('#ncc_cert_display').text('Answer: ' + displayText);
        } else if (sectionName === 'home_guard') {
            $('#home_guard_display').text('Answer: ' + displayText);
        } else if (sectionName === 'iti_eqi') {
            $('#iti_eqi_display').text('Answer: ' + displayText);
        } else if (sectionName === 'auto_mobile') {
            $('#auto_mobile_display').text('Answer: ' + displayText);
        }

        // Check if formData has any values
        toggleSaveButton();

        // Check if 'ncc_cert' value is '1' and show or hide the NCC section
        if (formData['ncc_cert'] === '1') {
            $('.choose_ncc_div').removeClass('hidden'); // Show the NCC choice div
            // Append value to the label for NCC option
            $('#bordered-radio-1 + label').append('<span class="ps-2 text-sm">(Selected: NCC A)</span>');
        } else {
            $('.choose_ncc_div').addClass('hidden'); // Hide the NCC choice div
        }
    }

    // Function to toggle visibility of the Save & Proceed button
    function toggleSaveButton() {
        // Check if formData is empty or contains any empty values
        var isEmpty = Object.keys(formData).length === 0; // Check if formData is empty
        var hasEmptyValue = Object.values(formData).includes(''); // Check if any value in formData is empty

        // If formData is empty or contains any empty values, hide the button
        if (isEmpty || hasEmptyValue) {
            $('#save_button').hide(); // Hide button if formData is empty or contains empty values
        } else {
            $('#save_button').show(); // Show button if formData contains all values
        }
    }

    // Function to submit all the collected data at once
    function submitAllData() {
        // Get CSRF token dynamically
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var userId = $('input[name="user_id"]').val();

        // Prepare the data to be sent in the AJAX request
        var data = {
            formData: formData,
            user_id: userId,
            _token: csrfToken // Include CSRF token for security
        };

        console.log('Submitting all data:', data);

        // Send AJAX request to submit all the collected data at once
        $.ajax({
            url: '{{ route('questionaries') }}', // Replace with your actual route
            type: 'POST',
            data: data,
            success: function(response) {
                // Handle success response
                console.log(response.message); // Response message from server (if any)

                // Show success alert with SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Data submitted successfully!',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Redirect to the 'questionaries' route after the alert is closed
                    window.location.href = '{{ route('preference') }}';
                });
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error('An error occurred:', status, error);

                // Show error alert with SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An error occurred. Please try again.',
                    confirmButtonText: 'OK'
                });
            }
        });
    }

    // Attach event listeners for each section to detect change
    $('input[name="min_score_mizo"]').change(function() {
        submitRadioData('min_score_mizo');
    });

    $('input[name="class_x_mizo"]').change(function() {
        submitRadioData('class_x_mizo');
    });

    $('input[name="mizo_as_mil"]').change(function() {
        submitRadioData('mizo_as_mil');
    });

    $('input[name="comp_cert"]').change(function() {
        submitRadioData('comp_cert');
    });

    $('input[name="ncc_cert"]').change(function() {
        submitRadioData('ncc_cert');
    });

    $('input[name="home_guard"]').change(function() {
        submitRadioData('home_guard');
    });

    $('input[name="iti_eqi"]').change(function() {
        submitRadioData('iti_eqi');
    });

    $('input[name="auto_mobile"]').change(function() {
        submitRadioData('auto_mobile');
    });

    // Attach click event for the "Save & Proceed" button
    $('#save_button').click(function() {
        submitAllData();
    });

    // Initially hide the save button if formData is empty
    toggleSaveButton();

    // On page load, hide NCC choice sectio

</script>

if ($('input[name="min_score_mizo"]:checked').val() === '1' || $(
                    'input[name="class_x_mizo"]:checked').val() === '0' ||
                $('input[name="mizo_as_mil"]:checked').val() === '0') {
                $('#save_button').show();
            } else if ($('input[name="min_score_mizo"]:checked').val() === '0' || $(
                    'input[name="class_x_mizo"]:checked').val() === '1' ||
                $('input[name="mizo_as_mil"]:checked').val() === '0') {
                $('#save_button').show();
            } else if ($('input[name="min_score_mizo"]:checked').val() === '0' || $(
                    'input[name="class_x_mizo"]:checked').val() === '0' ||
                $('input[name="mizo_as_mil"]:checked').val() === '1') {
                $('#save_button').show();
            } else {
                $('#save_button').hide();
            }
