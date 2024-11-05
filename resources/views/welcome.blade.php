<script>
    $(document).ready(function() {
        // Function to handle radio button selection and AJAX post for each section
        function submitRadioData(sectionName) {
            // Collect the selected value from the radio buttons for this section
            var selectedValue = $('input[name="' + sectionName + '"]:checked').val() ||
                ''; // Default to empty string if not selected

            console.log('Selected Value for ' + sectionName + ':', selectedValue);

            // Get CSRF token dynamically
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Prepare the data to be sent in the AJAX request
            var data = {
                [sectionName]: selectedValue,
                _token: csrfToken // Include CSRF token for security
            };

            // Log data before sending
            console.log('Sending data:', data);

            // Send AJAX request to submit the data for the current section
            $.ajax({
                url: '{{ route('questionaries') }}', // Replace with your actual route if different
                type: 'POST',
                data: data,
                success: function(response) {
                    // Handle success response
                    console.log(response.message); // Response message from server (if any)

                    // Determine which section is being handled and update the corresponding <p> tag
                    var displayText = selectedValue === '1' ? 'Yes, I have.' : 'No, I haven\'t.';
                        console.log(displayText)
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
                    // Disable the "Save & Proceed" button if no value is selected, enable if a value is selected
                    if (selectedValue === '') {
                        $('#save_button').prop('disabled',
                            true); // Disable button if value is empty
                    } else {
                        $('#save_button').prop('disabled',
                            false); // Enable button if value is selected
                    }
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error('An error occurred:', status, error);
                    alert('An error occurred. Please try again.');
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
    });
</script>
