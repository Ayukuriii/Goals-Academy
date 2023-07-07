// Mengambil seluruh elemen yang diperlukan
const formInput = document.querySelectorAll(".form-group input")
const formButton = document.querySelector(".form-button button")

// Function untuk show/hide password
// const passwordToggle = (passwordInput, eyeButton) => {
//     eyeButton.addEventListener('click', () => {
//         if (passwordInput.getAttribute('type') == 'password') {
//             passwordInput.setAttribute('type', 'text')
//             eyeButton.classList.replace('bi-eye-slash', 'bi-eye')
//         } else {
//             passwordInput.setAttribute('type', 'password')
//             eyeButton.classList.replace('bi-eye', 'bi-eye-slash')
//         }
//     })
// }

// Function tampilan tombol submit
const validate = target => {
    if (target.getAttribute('type') == 'password') {
        if (target.value.length < 8) {
            target.classList.add('is-invalid')
            target.setCustomValidity('Input invalid')
            return false
        } else {
            target.classList.remove('is-invalid')
            target.setCustomValidity('')
            return true
        }
    } else {
        if (target.checkValidity() == false) {
            target.classList.add('is-invalid')
            return false
        } else {
            target.classList.remove('is-invalid')
            return true
        }
    }
}

const updateButton = () => {
    result = true
    formInput.forEach(element => {
        result *= validate(element)
    })

    result ? formButton.removeAttribute('disabled') : formButton.setAttribute('disabled', true);
}

formInput.forEach(element => {
    element.addEventListener('change', e => {
        validate(e.target)
        updateButton()
    });
});

updateButton()
