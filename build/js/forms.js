// VALIDATION
$.validator.setDefaults({
    ignore: []
});
$.validator.addMethod("letters", function(value, element) {
    return this.optional(element) || /^[^1-9!@#\$%\^&\*\(\)\[\]:;,.?=+_<>`~\\\/"]+$/i.test(value);
});
$.validator.addMethod("email", function(value) {
    if (value == '') return true;
    var regexp = /[a-zA-Z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    return regexp.test(value);
});
$.validator.addMethod("digits", function(value, element) {
    return this.optional(element) || /^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/i.test(value);
});
$.validator.addMethod("dateFormat", function(value, element) {
    return this.optional(element) || /^\d{1,2}\/\d{1,2}\/\d{4}$/i.test(value);
});

$("form").each(function () { //Change
    let ths= $(this),
        id = ths.attr('id');

    ths.validate({
        highlight: function (element) {
            $(element).closest('div').addClass("error");
        },
        unhighlight: function (element) {
            $(element).closest('div').removeClass("error");
        },
        errorPlacement: function (error, element) {},
        errorClass: "error-text",
        rules: {
            name: {
                required: true,
                letters: true
            },
            phone_number: {
                digits: true
            },
            email: {
                required: true,
                email: true
            },
            date: {
                required: true,
                dateFormat: true
            }
        },
        messages: {
            name: {
                required: "Required field",
                letters: "Invalid input, please enter the correct data"
            },
            phone_number: {
                digits: "Invalid input, please enter the correct data"
            },
            email: {
                required: "Required field",
                email: "Invalid input, please enter the correct data"
            },
            date: {
                required: "Required field",
                dateFormat: "Invalid input, please enter the correct data"
            },
        },
        submitHandler: function (form) {
            var thisForm = $(form),
                formId = document.getElementById(id),
                formData = new FormData(formId);

            $.ajax({
                type: "POST",
                url: thisForm.attr('action'), //Change
                processData: false,
                contentType: false,
                data: formData,

            }).done(function () {
                ///Done Functions
                $.fancybox.close();
                $.fancybox.open({
                    src: '#modal-thanks',
                });

                setTimeout(function() {
                    $.fancybox.close();
                }, 3000);

                ths.trigger("reset");
            });
            return false;
        },
        success: function () {},
    })
});

//Check input focus
let inputs = $('.form-item__input');
inputs.on('blur', function () {
    let ths = $(this),
        thsParent = ths.closest('.input-wrap');
    thsParent.removeClass('focus');

    (ths.val() === '') ? thsParent.removeClass('focus') : thsParent.addClass('focus');
});
inputs.on('focus', function () {
    let ths = $(this),
        thsParent = ths.closest('.input-wrap');

    thsParent.addClass('focus');
});