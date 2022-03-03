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
    var source = ['alamin', 'rokib', 'yeasin'];
    $("#combobox").jqxComboBox({ source: source, selectedIndex: 0, width: '200px', height: '25px' });
    $('#myForm').jqxValidator({
        rules: [{
                input: "#jqxinput",
                message: 'Minimum length 3',
                action: 'keyup',
                rule: 'minLength=3'
            },
            {
                input: "#password",
                action: 'keyup',
                message: 'Maximum length 10',
                rule: 'maxLength=10'
            }
        ],
    })
})