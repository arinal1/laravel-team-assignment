function resetAllForm() {
    $('input.form-control').val('');
    $('#submit').attr('disabled', 'disabled');
}

$("input").bind('keyup input', function() {
    var isValid = true;
    $("input.form-control").each(function() {
        if ($(this).val() == '') {
            isValid = false;
            return false;
        }
    });
    if (isValid) $('#submit').removeAttr('disabled');
    else $('#submit').attr('disabled', 'disabled');
});