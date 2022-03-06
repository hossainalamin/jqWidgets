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
        width: 180
    })
    $('#DateTimeInput').jqxDateTimeInput({
        allowNullDate: true,
        yearCutoff: 2000,
        formatString: 'MM/dd/yyyy',
    })
    var source = ['alamin', 'rokib', 'yeasin'];
    $("#combobox").jqxComboBox({ source: source, selectedIndex: 0, width: '200px', height: '25px' });

    // $('#myForm').jqxValidator({
    //         rules: [
    //             { input: '#jqxinput', message: 'Username is required!', action: 'keyup', rule: 'required' },
    //             { input: '#password', message: 'Invalid e-mail!', action: 'keyup', rule: 'email' }
    //         ]
    //     })
    $('#myForm').jqxValidator({
        rules: [{
                input: '#jqxinput',
                message: 'required and minimum length is 3',
                action: 'keyup',
                rule: 'minLength=3,required'
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