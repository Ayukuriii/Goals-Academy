// Mengambil seluruh elemen yang diperlukan
const formInput = document.querySelectorAll(".form-group input")
const formButton = document.querySelector(".form-button button")

// Function tampilan tombol submit
const checkInput = () => {
    let trigger = false
    for (let i = formInput.length - 1; i >= 0; i -= 1) {
        if (formInput[i].getAttribute('id') == 'password') {
            if (formInput[i].value.length < 8) {
                formInput[i].setCustomValidity('invalid')
                trigger = false
                break
            } else {
                formInput[i].setCustomValidity('')
                trigger = true
            }
        } else {
            if (formInput[i].checkValidity()) {
                trigger = true
            } else {
                trigger = false
                break
            }
        }
    }
    return trigger
}

function updateButton() {
    checkInput() ? formButton.removeAttribute('disabled') : formButton.setAttribute('disabled', true);
}

formInput.forEach(element => {
    element.addEventListener('change', () => {
        updateButton()
    });
});
updateButton()