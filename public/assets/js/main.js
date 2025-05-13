// helpers
function post(formData, path) {
    return new Promise((resolve) => {
        let request = new XMLHttpRequest();
        let form = new FormData();
        formData.forEach(element => {
            form.append(element['name'], element['value']);
        });
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = this.responseText;
                resolve(response);
            }
        }
        request.open("POST", path, true);
        request.send(form);
    });
}

function get(path) {
    return new Promise((resolve) => {
        let request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let response = this.responseText;
                resolve(response);
            }
        }
        request.open("GET", path, true);
        request.send();
    });
}

function generateElement(path) {
    return new Promise(async (resolve) => {
        let element = await get(path);
        let template = document.createElement('template');
        template.innerHTML = element.trim();
        resolve(template.content.firstElementChild);
    });
}

function showAlert(path, alertText) {
    return new Promise(async (resolve) => {
        let alert = await generateElement(path);
        alert.querySelector("#alert-text").textContent = alertText;
        document.body.appendChild(alert);
        alert.style.transform = "translateY(-100%)";
        await new Promise((resolve) => {
            setTimeout(() => { resolve() }, 10);
        });
        alert.style.transform = "translateY(0)";
        alert.addEventListener("transitionend", async () => {
            await new Promise((resolve) => {
                setTimeout(() => { resolve() }, 2000);
            });
            alert.style.transform = "translateY(-100%)";
            alert.addEventListener("transitionend", () => {
                document.body.removeChild(alert);
                resolve();
            });
        });
    })
}

function proccessSpinner(spinner) {
    if (spinner == null) {
        return new Promise(async (resolve) => {
            spinner = await generateElement("/assets/js/components/proccess-spinner.html");
            document.body.appendChild(spinner);
            resolve(spinner);
        })
    } else {
        document.body.removeChild(spinner);
    }
}
// helpers
// main
function init(functionsList) {
    functionsList.forEach(func => {
        let handler = func['handler'];
        let functionName = func['function'];
        let page = document.querySelector(`[data-handler="${handler}"]`);
        if (page != null) {
            window[functionName]();
        }
    })
}

init([
    {
        'handler': 'signup',
        'function': 'signup'
    }
]);
// main
function signup() {
    const firstName = document.querySelector("#first-name");
    const lastName = document.querySelector("#last-name");
    const username = document.querySelector("#username");
    const mobile = document.querySelector("#mobile");
    const email = document.querySelector("#email");
    const country = document.querySelector("#country");
    const password = document.querySelector("#password");
    const confirmPassword = document.querySelector("#confirm-password");
    const send = document.querySelector("#send");

    send.addEventListener("click", async () => {
        if (firstName.value == "") {
            showAlert("/assets/js/components/alert.html", "First name is required");
            return;
        }
        if (lastName.value == "") {
            showAlert("/assets/js/components/alert.html", "Last name is required");
            return;
        }
        if (username.value == "") {
            showAlert("/assets/js/components/alert.html", "Username is required");
            return;
        }
        if (email.value == "") {
            showAlert("/assets/js/components/alert.html", "Email is required");
            return;
        }
        if (mobile.value == "") {
            showAlert("/assets/js/components/alert.html", "Mobile is required");
            return;
        }
        if (country.value == "") {
            showAlert("/assets/js/components/alert.html", "Country is required");
            return;
        }
        if (password.value == "") {
            showAlert("/assets/js/components/alert.html", "Password is required");
            return;
        }
        if (confirmPassword.value == "") {
            showAlert("/assets/js/components/alert.html", "Confirm password is required");
            return;
        }
        if (password.value != confirmPassword.value) {
            showAlert("/assets/js/components/alert.html", "Password and confirm password do not match");
            return;
        }
        console.log(firstName.value);
        let formData = [
            { name: "first_name", value: firstName.value },
            { name: "last_name", value: lastName.value },
            { name: "username", value: username.value },
            { name: "mobile", value: mobile.value },
            { name: "email", value: email.value },
            { name: "country", value: country.value },
            { name: "password", value: password.value },
            { name: "confirm_password", value: confirmPassword.value }
        ];
        let spinner = await proccessSpinner();
        let response = await post(formData, "/api/user/signup");
        proccessSpinner(spinner);
        console.log(response);
    });
}