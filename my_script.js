$(document).ready(function () {
    Login();
});

function Login() {
    $(document).on('click', '.submit', function () {

        $("#submitForm").validate({
            errorClass: 'error',
            rules: {
                fname: "required",
                iname: "required",
                address: "required",
                year: {
                    required: true,
                    digits: true,
                    maxlength: 4,
                    minlength: 4
                },
                month: {
                    required: true,
                    digits: true,
                    maxlength: 2,
                    minlength: 1
                },
                day: {
                    required: true,
                    digits: true,
                    maxlength: 2,
                    minlength: 1
                },
                nic: {
                    required: true,
                    maxlength: 12,
                    minlength: 10
                },
                sex: "required",
                course: "required",
                edu: "required",
                ed: "required",
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                whatsapp: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                high: "required",
                occu: "required",
            },
            messages: {
                fname: "Please enter your Name with Initials",
                iname: "Please enter your Names denoted by Initials",
                address: "Please enter your address",
                year: {
                    required: "A year is required.",
                },
                month: {
                    required: "A month is required.",
                },
                day: {
                    required: "A day is required.",
                },
                nic: {
                    required: "Please enter your nic number",
                },
                sex: "Please select a gender",
                course: "Select enrollment for the course",
                edu: "Select Educational Qualification",
                ed: "Please enter your grade",
                mobile: "Please enter your mobile number",
                whatsapp: "Please enter your mobile number",


            },
            errorPlacement: function (error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('.cont'));
                }
                else { // This is the default behavior 
                    error.insertAfter(element);
                }

            }
        })
    });
}

$(function () {
    $('input[name="edu"]').on('click', function () {
        if ($(this).val() == 'other') {
            $('#textboxes').show();
        }
        else {
            $('#textboxes').hide();
        }
    });
});