<script>
$(document).ready(function() {
    $('#loginButton').on('click', function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Collect form data
        const recId = $('#rec_id').val();
        const mobileNumber = $('#mob_no').val();
        const dob = $('#dob').val();

        // Simple validation: Ensure that either Recruitment ID or Mobile Number & DOB is filled
        if ((!recId && !mobileNumber) || !dob) {
            alert('Please provide either a Recruitment ID or both Mobile Number and Date of Birth.');
            return;
        }

        // Prepare data for AJAX request
        const data = {
            rec_id: recId,       // Optional: If provided
            mobile_no: mobileNumber,  // Optional: If provided
            dob: dob             // Required
        };

        // Send AJAX request to the login route
        $.ajax({
            url: '{{ route('login') }}', // Your login route URL
            type: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token for security
            },
            success: function(response) {
                if (response.status === 'success') {
                    // Handle successful login
                    alert(response.message);  // Display success message
                    // Redirect to the desired page (e.g., questionaries)
                    window.location.href = '{{ route('questionaries') }}';  // Manually handle redirect
                } else {
                    // Handle failed login
                    alert('Login failed: ' + response.message);
                }
            },
            error: function(xhr) {
                // Handle errors (invalid form submission, etc.)
                const errors = xhr.responseJSON.errors;
                if (errors) {
                    alert('Please fix the following errors:\n' + Object.values(errors).join('\n'));
                } else {
                    alert('An unexpected error occurred. Please try again.');
                }
            }
        });
    });
});
</script>
