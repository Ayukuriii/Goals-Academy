// Cek Validasi

var $registerInput = $(".form-register .form-control");
var $registerButton = $("#submit-register")[0];

$.fn.isValid = function(){
    return this[0].checkValidity()
}

function checkInput() {
    var trigger = false;
    $registerInput.each(function() {
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
    checkInput() ? $registerButton.style.backgroundColor='#fe7e1f' : $registerButton.style.backgroundColor='';
}

$registerInput.each($(this).change(updateButton))
