$(document).ready(function() {
    $('#jqxinput').jqxInput({
        placeHolder: "Enter a Country",
        height: 25,
        width: 200,
        minLength: 1

    });

    $('.formattedInput').jqxFormattedInput({
        width: 250,
        height: 25,
        radix: 'decimal',
        value: 15,
        dropDown: true,
        spinButtons: true
    });
    $('#password').jqxPasswordInput({
        placeHolder: 'Enter a password',
        height: 25,
        width: 200
    })
    $('#DateTimeInput').jqxDateTimeInput({
        allowNullDate: true,
        yearCutoff: 2000,
        formatString: 'MM/dd/yyyy',
    })
})