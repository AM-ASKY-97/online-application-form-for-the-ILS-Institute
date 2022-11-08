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
                course: "required",
                edu: "required",
                ed: "required",
                mobile: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
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

$('#nic').on('input', function () {

    if ($('#nic').val().charAt(9) != "v" || $('#nic').val().charAt(9) != "V") {
        $("#submit").prop("disabled", true);
        $('#pTest').text(' Enter valid nic')
    }

    else {
        $("#submit").prop("disabled", false);
    }

    if ($('#nic').val().length == 10 && $('#nic').val().charAt(9) == "v" || $('#nic').val().charAt(9) == "V") {

        var inputString = $("#nic").val();

        var newString = inputString.substring(0, 9)

        if (/^[0-9]+$/.test(newString)) {
            $("#submit").prop("disabled", false);
            $('#pTest').text(' Submit')

            $.ajax({
                url: 'dob.php',
                type: 'post',
                data: $("#submitForm").serialize(),
    
                success: function (msg) {
    
                    dob = msg.substring(0, 17)
    
                    gender = msg.substring(18,)
    
                    gender = gender.trim();
                    dob = dob.trim();
    
                    $('#dob').val(dob);
    
                    if (gender == "Male") {
                        $("#male").prop("checked", true);
                        $("#female").prop("disabled", true);
                    }
    
                    if (gender == "Female") {
                        $("#female").prop("checked", true);
                        $("#male").prop("disabled", true);
                    }
                }
            });
        }
    }

    else if ($('#nic').val().length == 12) {

        var inputString = $("#nic").val();

        if (/^[0-9]+$/.test(inputString)) {
            $("#submit").prop("disabled", false);
            $('#pTest').text(' Submit')

            $.ajax({
                url: 'dob.php',
                type: 'post',
                data: $("#submitForm").serialize(),
    
                success: function (msg) {
                    dob = msg.substring(0, 17)
    
                    gender = msg.substring(20,)
    
                    gender = gender.trim();
                    dob = dob.trim();
    
                    $('#dob').val(dob);
    
                    if (gender == "Male") {
                        $("#male").prop("checked", true);
                        $("#female").prop("disabled", true);
                    }
    
                    if (gender == "Female") {
                        $("#female").prop("checked", true);
                        $("#male").prop("disabled", true);
                    }
                }
            });
        }
    }

    else {
        $('#dob').val("mm / dd / yyyy");
        $("#male").prop("checked", false);
        $("#female").prop("checked", false);
        $("#female").prop("disabled", false);
        $("#male").prop("disabled", false);
    }
});

$('#dob').keydown(function () {
    return false;
});