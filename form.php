<?php
include 'inc/header.php';
?>
<body style ="margin-left : 500px;">
    <div id="testForm">
    </div>
    <script>
  var template = [
                {
                    bind: 'firstName',
                    type: 'text',
                    label: 'First name',
                    labelWidth: '80px',
                    width: '250px',
                    info: 'Enter first name',
                },
                {
                    bind: 'lastName',
                    type: 'text',
                    label: 'Last name',
                    required: true,
                    labelWidth: '80px',
                    width: '250px',
                    info: 'Enter last name'
                },  
                {
                    bind: 'company',
                    type: 'text',
                    label: 'Company',
                    required: false,
                    labelWidth: '80px',
                    width: '250px'
                },
                {
                    bind: 'address',
                    type: 'text',
                    label: 'Address',
                    required: true,
                    labelWidth: '80px',
                    width: '250px'
                },
                {
                    bind: 'city',
                    type: 'text',
                    label: 'City',
                    required: true,
                    labelWidth: '80px',
                    width: '250px'
                },
                {
                    bind: 'state',
                    type: 'option',
                    label: 'State',
                    required: true,
                    labelWidth: '80px',
                    width: '250px',
                    component: 'jqxDropDownList',
                    options: [
                        { value: 'California' },
                        { value: 'New York'},
                        { value: 'Oregon'},
                        { value: 'Illinois'},
                        { value: 'Texas'}
                    ]
                },
                {
                    bind: 'zip',
                    type: 'text',
                    label: 'Zip code',
                    required: true,
                    labelWidth: '80px',
                    width: '250px'
                },
                {
                    type: 'blank',
                    rowHeight: '10px'
                },
                {
                    columns: [
                        {
                            type: 'button',
                            text: 'Sign up',
                            width: '90px',
                            height: '30px',
                            rowHeight: '40px',
                            columnWidth: '50%',
                            align: 'right'
                        },
                        {
                            type: 'button',
                            text: 'Cancel',
                            width: '90px',
                            height: '30px',
                            rowHeight: '40px',
                            columnWidth: '50%'
                        }                
                    ]
                }
            ];
            var sampleValue = {
                lastName: 'Scott',
                address: '1st Ave SW',
                company: 'N/A',
                city: 'San Antonio',
                state: 'Texas',
                zip: '78209'
            };
            $('#testForm').jqxValidator({
                rules : {
                    input : "firstName",
                    message : 'Min length ',
                    action : 'keyup',
                    rule : 'minLength=3'
                }
            })
            $('#testForm').jqxForm({
                template: template,
                value: sampleValue,
                padding: { left: 10, top: 10, right: 10, bottom: 10 }
            });
</script>
</body>
</html>