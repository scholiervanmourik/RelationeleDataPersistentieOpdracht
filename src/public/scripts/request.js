function request(method, url, params, cb) {
    let xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            cb(this);
        }
    };

    xhr.send(params);
}

/**
 * @param {string} method
 * @param {string} url
 * @param {HTMLFormElement} form
 * @param {Function} cb
 */
function requestForm(method, url, form, cb) {
    let xhr = new XMLHttpRequest(),
        formData = new FormData(form);

    xhr.open(method, url);
    xhr.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            cb(this);
        }
    };

    xhr.send(formData);
}

let forms = document.getElementsByClassName('xhr-form');
Array.from(forms).forEach(function (form) {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        requestForm(this.method, this.action, this, getCallback(this.dataset.callback));
    });
});

function getCallback(callbackName) {
    switch (callbackName) {
        case 'login':
            return loginCallback;
        case 'register':
            return registerCallback;
        case 'addOrganisation':
            return addOrganisationCallback;
        case 'uploadContent':
            return uploadContentCallback;
        default:
            return null;
    }
}

function loginCallback(result) {
    let res = JSON.parse(result.responseText);
    if (res.success) {
        window.location = '/';
    } else {
        alert(res.message);
    }
}

function registerCallback(result) {
    let res = JSON.parse(result.responseText);
    if (res.success) {
        window.location = '/';
        alert(res.message);
    } else {
        alert(res.message);
    }
}

function addOrganisationCallback(result) {
    let res = JSON.parse(result.responseText);
    if (res.success) {
        alert(res.message);
        window.location = '/src/views/sections/organisations.php';
    } else {
        alert(res.message);
    }
}

function uploadContentCallback(result) {
    let res = JSON.parse(result.responseText);
    alert(res.message);
}