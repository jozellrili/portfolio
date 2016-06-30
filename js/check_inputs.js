$(document).ready(function (){
    validate();
    $('#form_name, #form_lastname, #form_email, #form_message').change(validate);
});

function validate(){
    if ($('#form_name').val().length   >   0   &&
        $('#form_lastname').val().length  >   0   &&
        $('#form_email').val().length    >   0 &&
        $('#form_message').val().length > 0 )  {
        $("button[type=submit]").prop("disabled", false);
    }
    else {
        $("button[type=submit]").prop("disabled", true);
    }
}