<script>
    $(document).ready(function() {
        // Handle form submission
        $('#submitButton').on('click', function(event) {
            event.preventDefault(); // Prevent the default form submission

            // Check if OTP is verified
            if (!document.getElementById('submitButton').classList.contains('hidden')) {
                // Collect form data
                var formData = $('#registrationForm').serialize();

                // Send AJAX request
                $.ajax({
                    url: '{{ route('register') }}', // Your route
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Handle success
                        $('#registrationId').text(response.registration_number);
                        // $('#reg-form-saved').removeClass('hidden');
                        $('#responseMessage').html('<p class="text-green-500">' + response
                            .message + '</p>');
                    },
                    error: function(xhr) {
                        let errorMessage = '<p class="text-red-500">An error occurred:</p>';

                        // Check if the response is in JSON format
                        try {
                            const jsonResponse = JSON.parse(xhr.responseText);
                            if (jsonResponse.errors) {
                                errorMessage += '<ul>';
                                $.each(jsonResponse.errors, function(key, value) {
                                    errorMessage += '<li>' + value[0] +
                                        '</li>'; // Show first error
                                });
                                errorMessage += '</ul>';
                            } else {
                                errorMessage += '<p>' + jsonResponse.message ||
                                    'An error occurred' + '</p>';
                            }
                        } catch (e) {
                            // If JSON parsing fails, fall back to responseText
                            errorMessage += '<p>' + xhr.responseText +
                                '</p>'; // Show raw response
                        }

                        $('#responseMessage').html(errorMessage);
                    }
                });

            } else {
                alert('Please verify your OTP before submitting the form.');
            }
        });

        // Handle sending OTP
        document.getElementById('send_OTP').addEventListener('click', function() {
            const phoneNumber = document.getElementById('p_number').value;

            if (!phoneNumber) {
                alert('Please enter your phone number.');
                return;
            }

            // Create FormData object
            const formData = new FormData();
            formData.append('phone', phoneNumber);

            fetch('/send-otp', {
                    method: 'POST',
                    dataType: 'text',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('OTP sent successfully!');
                        document.querySelector('.verify_phone').classList.remove(
                            'hidden'); // Show OTP input
                    } else {
                        alert('Error sending OTP. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while sending the OTP.');
                });
        });

        // Handle OTP verification
        document.getElementById('verified').addEventListener('click', function() {
            const otp = document.getElementById('otp').value;

            if (!otp) {
                alert('Please enter the OTP.');
                return;
            }

            // Create FormData object
            const formData = new FormData();
            formData.append('otp', otp);

            fetch('/verify-otp', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('OTP verified successfully!');
                        document.querySelector('.verify_phone').classList.add('hidden');

                        // Show the submit button
                        document.getElementById('submitButton').classList.remove('hidden');
                    } else {
                        alert('Invalid OTP. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred while verifying the OTP.');
                });
        });
    });
</script>
<script>
    document.getElementById('reg_declaration').addEventListener('change', function() {
        const submitButton = document.getElementById('submitButton');

        if (this.checked) {
            submitButton.classList.remove('hidden'); // Show the button
        } else {
            submitButton.classList.add('hidden'); // Hide the button
        }
    });

    /** jQUERY for calculate age **/
    function myFunction() {
        var dob = document.getElementById("dob").value;

        var form = document.getElementById("form"),
            date = document.getElementById("date2"),
            month = document.getElementById("month2"),
            year = document.getElementById("year2"),

            age = document.getElementById("age"),
            days = document.getElementById("days"),
            mons = document.getElementById("months"),
            ddd = "2024/07/01";
        today = new Date(ddd);
        console.log(today);

        year.value = today.getFullYear();
        month.value = today.getMonth() + 1;
        date.value = today.getDate();

        var arr = dob.split("-");
        var by = arr[0];
        var bm = arr[1];
        var bd = arr[2];

        var ty = Number.parseFloat(year.value),
            tm = Number.parseFloat(month.value),
            td = Number.parseFloat(date.value);
        console.log(ty);

        if (td < bd) {
            days = (td - bd + 30);
            tm = tm - 1;
        } else {
            days = (td - bd);
        }

        if (tm < bm) {
            months = (tm - bm + 12);
            ty = ty - 1;
        } else {
            months = (tm - bm);
        }
        agee.value = (ty - by) + ' years ' + months + ' months ' + days + ' days';
    }
    $('.datepicker').datepicker();
</script>

<script>
    $('input[type=text], textarea').keyup(function() {
        $(this).val(function() {
            return this.value.toUpperCase();
        })
    });

    /** jQUERY for email validation **/
    const validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };
</script>
