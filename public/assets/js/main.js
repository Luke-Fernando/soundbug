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
        request.send();
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

showAlert("/assets/js/components/alert.html", "Success");
