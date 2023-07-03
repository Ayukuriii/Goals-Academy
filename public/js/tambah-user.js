// Cek Validasi

var $input = $("form.form-control");
var $button = $("#button")[0];

$.fn.isValid = function(){
    return this[0].checkValidity()
}

function checkInput() {
    var trigger = false;
    $input.each(function() {
        if ($(this).val()) {
            if ($(this).isValid()) {
                trigger = true
            } else {
                trigger = false
                return false
            }
        } else {
            trigger = false;
            return false;
        }
    })
    return trigger;
}

function updateButton() {
    checkInput() ? $button.style.backgroundColor='#fe7e1f' : $button.style.backgroundColor='';
}

$input.each($(this).change(updateButton))
