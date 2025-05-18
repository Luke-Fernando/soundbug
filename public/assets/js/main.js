// helpers
class Connection {
    post(formData, path) {
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

    get(path) {
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
}

function generateElement(path) {
    return new Promise(async (resolve) => {
        let element = await new Connection().get(path);
        let template = document.createElement('template');
        template.innerHTML = element.trim();
        resolve(template.content.firstElementChild);
    });
}

class Alert {
    constructor() {
        this.uniqueShortId = new Date().getTime();
        this.alertHandler = null;
    }

    alert(path, alertText) {
        return new Promise(async (resolve) => {
            await this.#showAlert(path, alertText);
            this.#hideAlert();
            resolve();
        })
    }

    #showAlert(path, alertText) {
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
                this.alertHandler = alert;
                console.log("Opened alert: " + this.uniqueShortId);
                resolve();
            });
        })
    }

    #hideAlert() {
        this.alertHandler.querySelector("[data-close]").addEventListener("click", () => {
            this.alertHandler.style.transform = "translateY(-100%)";
            this.alertHandler.addEventListener("transitionend", () => {
                document.body.removeChild(this.alertHandler);
                console.log("Closed alert: " + this.uniqueShortId);
                resolve();
            });
        });
    }
}

class Spinner {

    constructor() {
        this.proccessSpinnerHandler = null;
    }

    showProccessSpinner(spinner) {
        if (this.proccessSpinnerHandler == null) {
            return new Promise(async (resolve) => {
                spinner = await generateElement("/assets/js/components/proccess-spinner.html");
                document.body.appendChild(spinner);
                this.proccessSpinnerHandler = spinner;
                resolve();
            })
        }
    }

    hideProccessSpinner() {
        if (this.proccessSpinnerHandler != null) {
            document.body.removeChild(this.proccessSpinnerHandler);
        }
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
    },
    {
        'handler': 'signin',
        'function': 'signin'
    }
]);
// main
function checkboxTrigger() {
    let triggers = document.querySelectorAll("input[data-checkbox-trigger]");
    document.addEventListener("click", (e) => {
        triggers.forEach(trigger => {
            let triggerVal = trigger.getAttribute("data-checkbox-trigger");
            let triggerContainers = document.querySelectorAll(`[data-checkbox-trigger=${triggerVal}]`);
            let containsTrigger = false;
            triggerContainers.forEach(container => {
                if (e.target.contains(container)) {
                    containsTrigger = true;
                    console.log("----------");
                    console.log(e.target);
                    console.log(container);
                    console.log("----------");
                }
            });
            if (!(e.target.matches(`[data-checkbox-trigger="${triggerVal}"]`)) && !containsTrigger) {
                trigger.checked = false;
            }
        });
    });
}

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
            await new Alert().alert("/assets/js/components/alert.html", "First name is required");
            return;
        }
        if (lastName.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Last name is required");
            return;
        }
        if (username.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Username is required");
            return;
        }
        if (email.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Email is required");
            return;
        }
        if (mobile.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Mobile is required");
            return;
        }
        if (country.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Country is required");
            return;
        }
        if (password.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Password is required");
            return;
        }
        if (confirmPassword.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Confirm password is required");
            return;
        }
        if (password.value != confirmPassword.value) {
            await new Alert().alert("/assets/js/components/alert.html", "Password and confirm password do not match");
            return;
        }
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
        let spinner = new Spinner();
        await spinner.showProccessSpinner();
        let response = await new Connection().post(formData, "/api/user/signup");
        spinner.hideProccessSpinner();
        console.log(JSON.parse(response));
        let responseObj = JSON.parse(response);
        if (responseObj.status == "success") {
            await new Alert().alert("/assets/js/components/alert.html", "Successfully signed up");
            window.location.href = "/signin";
        } else if (responseObj.status == "error") {
            await new Alert().alert("/assets/js/components/alert.html", responseObj.message);
        } else {
            await new Alert().alert("/assets/js/components/alert.html", "Something went wrong");
        }
    });
}

function signin() {
    const username = document.querySelector("#username");
    const password = document.querySelector("#password");
    const rememberMe = document.querySelector("#remember-me");
    const send = document.querySelector("#send");

    send.addEventListener("click", async () => {
        if (username.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Username is required");
            return;
        }
        if (password.value == "") {
            await new Alert().alert("/assets/js/components/alert.html", "Password is required");
            return;
        }
        let formData = [
            { name: "username", value: username.value },
            { name: "password", value: password.value },
            { name: "remember_me", value: rememberMe.checked ? 1 : 0 }
        ];
        let spinner = new Spinner();
        await spinner.showProccessSpinner();
        let response = await new Connection().post(formData, "/api/user/signin");
        console.log(response);
        spinner.hideProccessSpinner();
        console.log(JSON.parse(response));
        let responseObj = JSON.parse(response);
        if (responseObj.status == "success") {
            await new Alert().alert("/assets/js/components/alert.html", "Successfully signed in");
            window.location.href = "/";
        } else if (responseObj.status == "error") {
            await new Alert().alert("/assets/js/components/alert.html", responseObj.message);
        } else {
            await new Alert().alert("/assets/js/components/alert.html", "Something went wrong");
        }
    });
}