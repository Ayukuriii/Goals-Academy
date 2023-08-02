// Mengambil token
const token = document.querySelector("input[name='_token']");

// Function tampilan tombol submit
const validate = (role, fields, buttonId, id) => {
    const inputElements = [];
    const button = document.getElementById(buttonId);
    const data = {"_token": token.value};
    let url = "";

    if (role=="register") {
        url = "/validate_register";
    } else if (role=="login") {
        url = "/validate_login";
    } else if (role=="tambah_user") {
        url = '/validate_tambah_user';
    } else if (role=="edit_user") {
        url = `/validate_edit_user/${id}`;
    } else if (role=="lengkapi_profil") {
        url = `/validate_lengkapi_profil/${id}`;
    }

    fields.forEach(field => {
        inputElements.push(document.querySelector(`input[name="${field}"]`));
        data[field] = document.querySelector(`input[name="${field}"]`).value;
    });

    $.ajax({
        type: "post",
        url: url,
        data: data,
        success: function (response) {
            fields.forEach(field => {
                const element = document.querySelector(`input[name="${field}"]`);
                if (response.success) {
                    element.classList.remove("is-invalid");
                    element.setCustomValidity("");
                    element.parentElement.querySelector(".invalid-feedback").innerText = "";
                } else if (response.error[field]) {
                    const message = response.error[field][0];
                    if (message.split(" ").slice(-1) != 'required.') {
                        element.classList.add("is-invalid");
                        element.setCustomValidity(message);
                        element.parentElement.querySelector(".invalid-feedback").innerText = message;
                    } else {
                        element.classList.remove("is-invalid");
                        element.setCustomValidity(message);
                        element.parentElement.querySelector(".invalid-feedback").innerText = "";
                    }
                } else {
                    element.classList.remove("is-invalid");
                    element.setCustomValidity("");
                    element.parentElement.querySelector(".invalid-feedback").innerText = "";
                }
            });
        },
        complete: function () {
            updateButton(inputElements, button);
        }
    });
};

const updateButton = (inputElements, button) => {
    result = true;
    inputElements.forEach((element) => {
        result *= element.checkValidity();
    });

    result
        ? button.removeAttribute("disabled")
        : button.setAttribute("disabled", true);
}
