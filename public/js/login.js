// Cek Validasi

var $loginInput = $(".form-login .form-control");
var $loginButton = $("#submit-login")[0];

$.fn.isValid = function(){
    return this[0].checkValidity()
}

function checkInput() {
    var trigger = false;
    $loginInput.each(function() {
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
    checkInput() ? $loginButton.style.backgroundColor='#fe7e1f' : $loginButton.style.backgroundColor='';
}

$loginInput.each($(this).change(updateButton))
