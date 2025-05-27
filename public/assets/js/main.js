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
    constructor(path, alertText) {
        this.#initAlert(path, alertText);
    }

    async #initAlert(path, alertText) {
        let alert = await generateElement(path);
        let alertCloseBtn = alert.querySelector("[data-close]");
        alert.querySelector("#alert-text").textContent = alertText;
        this.#displayAlert(alert);
        alertCloseBtn.addEventListener("click", () => {
            this.#hideAlert(alert);
        })

    }

    async #displayAlert(alert) {
        document.body.appendChild(alert);
    }

    #hideAlert(alert) {
        alert.classList.add("-translate-y-full");
        alert.addEventListener("transitionend", () => {
            document.body.removeChild(alert);
        })
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

class Confirmation {
    constructor(state) {
        this.#init(state);
    }

    #init(state) {
        const states = [true, false];
        if (!states.includes(state)) {
            this.#distpatch(state);
        } else {
            console.warn("Invalid state for confirmation");
        }
    }

    #distpatch(state) {
        let confirmation = new CustomEvent("confirm", {
            detail: {
                selected: state
            }
        });
        document.dispatchEvent(confirmation);
    }
}

class AskConfirmation {

    constructor() {
        this.#init();
    }

    async #init() {
        let confirmationWindow = await generateElement("/assets/js/components/confirmation.html");
        document.body.appendChild(confirmationWindow);
        confirmationWindow.querySelector("[data-confirmation='true']").addEventListener("click", () => {
            new Confirmation("true");
            document.body.removeChild(confirmationWindow);
        });
        confirmationWindow.querySelector("[data-confirmation='false']").addEventListener("click", () => {
            new Confirmation("false");
            document.body.removeChild(confirmationWindow);
        });
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
    },
    {
        'handler': 'signout',
        'function': 'signout'
    },
    {
        'handler': 'forgot-password',
        'function': 'sendResetLink'
    },
    {
        'handler': 'add-track',
        'function': 'addTrack'
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
            new Alert("/assets/js/components/alert.html", "First name is required");
            return;
        }
        if (lastName.value == "") {
            new Alert("/assets/js/components/alert.html", "Last name is required");
            return;
        }
        if (username.value == "") {
            new Alert("/assets/js/components/alert.html", "Username is required");
            return;
        }
        if (email.value == "") {
            new Alert("/assets/js/components/alert.html", "Email is required");
            return;
        }
        if (mobile.value == "") {
            new Alert("/assets/js/components/alert.html", "Mobile is required");
            return;
        }
        if (country.value == "") {
            new Alert("/assets/js/components/alert.html", "Country is required");
            return;
        }
        if (password.value == "") {
            new Alert("/assets/js/components/alert.html", "Password is required");
            return;
        }
        if (confirmPassword.value == "") {
            new Alert("/assets/js/components/alert.html", "Confirm password is required");
            return;
        }
        if (password.value != confirmPassword.value) {
            new Alert("/assets/js/components/alert.html", "Password and confirm password do not match");
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
            new Alert("/assets/js/components/alert.html", "Successfully signed up");
            window.location.href = "/signin";
        } else if (responseObj.status == "error") {
            new Alert("/assets/js/components/alert.html", responseObj.message);
        } else {
            new Alert("/assets/js/components/alert.html", "Something went wrong");
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
            new Alert("/assets/js/components/alert.html", "Username is required");
            return;
        }
        if (password.value == "") {
            new Alert("/assets/js/components/alert.html", "Password is required");
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
            new Alert("/assets/js/components/alert.html", "Successfully signed in");
            window.location.href = "/";
        } else if (responseObj.status == "error") {
            new Alert("/assets/js/components/alert.html", responseObj.message);
        } else {
            new Alert("/assets/js/components/alert.html", "Something went wrong");
        }
    });
}

async function signout() {
    const signoutBtn = document.getElementById("signout-btn");
    signoutBtn.addEventListener("click", async () => {
        new AskConfirmation();
    });
    document.addEventListener("confirm", async (e) => {
        if (e.detail.selected == "true") {
            await new Connection().get("/api/user/signout");
            new Alert("/assets/js/components/alert.html", "Successfully signed out");
            window.location.reload();
        }
    });
}

function sendResetLink() {
    const sendResetButton = document.getElementById("send-reset-link");
    const resetEmail = document.getElementById("reset-email");

    sendResetButton.addEventListener("click", async () => {
        if (resetEmail.value == "") {
            new Alert("/assets/js/components/alert.html", "Email is required");
            return;
        }
        let spinner = new Spinner();
        await spinner.showProccessSpinner();
        let formData = [
            { name: "reset_email", value: resetEmail.value }
        ];
        let response = await new Connection().post(formData, "/api/user/send-reset-link");
        console.log(response);
        spinner.hideProccessSpinner();
        console.log(JSON.parse(response));
        let responseObj = JSON.parse(response);
        if (responseObj.status == "success") {
            new Alert("/assets/js/components/alert.html", "Reset link has been sent to your email");
        } else {
            new Alert("/assets/js/components/alert.html", responseObj.message);
        }
    })
}

function addTrack() {
    loadSubCategories();
    uploadThumbnail();
    uploadTrack();
    submitTrack();
}

function loadSubCategories() {
    const category = document.getElementById("category");
    const subCategory = document.getElementById("sub-category");

    category.addEventListener("change", async () => {
        let id = category.value;
        let spinner = new Spinner();
        spinner.showProccessSpinner();
        response = await new Connection().get(`/api/load-sub-category?id=${id}`);
        spinner.hideProccessSpinner();
        let responseObj = JSON.parse(response);
        if (responseObj.status == "success") {
            subCategory.innerHTML = responseObj.data;
        } else {
            new Alert("/assets/js/components/alert.html", responseObj.message);
        }
    })
}

function uploadThumbnail() {
    const thumbnail = document.getElementById("thumbnail");
    const thumbnailPreview = document.getElementById("thumbnail-preview");
    thumbnail.addEventListener("change", e => {
        let file = e.target.files[0];
        let reader = new FileReader();
        reader.onload = (e) => {
            thumbnailPreview.setAttribute("src", e.target.result);
        }
        reader.readAsDataURL(file)
    })
}

function uploadTrack() {
    const track = document.getElementById("track");
    const trackPreview = document.getElementById("track-preview");
    const trackDuration = document.getElementById("track-duration");
    const previewSlider = document.getElementById("preview-slider");
    let minutes;
    let seconds;
    let duration;
    track.addEventListener("change", e => {
        let file = e.target.files[0];
        let reader = new FileReader();
        reader.onload = (e) => {
            let audio = new Audio(e.target.result);
            audio.volume = 0.2;
            audio.addEventListener("loadedmetadata", () => {
                minutes = Math.floor(audio.duration / 60);
                seconds = Math.floor(audio.duration - minutes * 60);
                duration = `${minutes}:${seconds}`;
                trackDuration.textContent = duration;
            });
            audio.addEventListener("timeupdate", () => {
                let currentPercentage = (audio.currentTime / audio.duration) * 100;
                if (currentPercentage == 100) {
                    currentPercentage = 0;
                    trackPreview.checked = false;
                }
                previewSlider.style.width = `${currentPercentage}%`;
            });
            trackPreview.addEventListener("change", () => {
                if (trackPreview.checked) {
                    audio.play();
                } else {
                    audio.pause();
                }
            })
        }
        reader.readAsDataURL(file)
    })
}

function submitTrack() {
    const thumbnail = document.getElementById("thumbnail");
    const track = document.getElementById("track");
    const title = document.getElementById("title");
    const price = document.getElementById("price");
    const category = document.getElementById("category");
    const subCategory = document.getElementById("sub-category");
    const description = document.getElementById("description");
    const publishBtn = document.getElementById("publish");

    publishBtn.addEventListener("click", async () => {
        if (thumbnail.files.length == 0) {
            new Alert("/assets/js/components/alert.html", "Please add a thumbnail");
            return;
        }
        if (track.files.length == 0) {
            new Alert("/assets/js/components/alert.html", "Please add the audio track");
            return;
        }
        if (title.value == "") {
            new Alert("/assets/js/components/alert.html", "Please add the title");
            return;
        }
        if (price.value == "") {
            new Alert("/assets/js/components/alert.html", "Please add the price");
            return;
        }
        if (category.value == "") {
            new Alert("/assets/js/components/alert.html", "Please select the category");
            return;
        }
        if (subCategory.value == "") {
            new Alert("/assets/js/components/alert.html", "Please select the sub category");
            return;
        }
        if (description.value == "") {
            new Alert("/assets/js/components/alert.html", "Please add the description");
            return;
        }
        let formData = [
            { name: "thumbnail", value: thumbnail.files[0] },
            { name: "track", value: track.files[0] },
            { name: "title", value: title.value },
            { name: "price", value: price.value },
            { name: "category", value: category.value },
            { name: "sub_category", value: subCategory.value },
            { name: "description", value: description.value },
        ];
        let spinner = new Spinner();
        await spinner.showProccessSpinner();
        let response = await new Connection().post(formData, "/api/track/add");
        console.log(response);
        spinner.hideProccessSpinner();
        console.log(JSON.parse(response));
        let responseObj = JSON.parse(response);
        if (responseObj.status == "success") {
            new Alert("/assets/js/components/alert.html", "Successfully published");
            window.location.href = "/my-tracks";
        } else if (responseObj.status == "error") {
            new Alert("/assets/js/components/alert.html", responseObj.message);
        } else {
            new Alert("/assets/js/components/alert.html", "Something went wrong");
        }
    })
}