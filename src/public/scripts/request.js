function request(method, url, params, cb) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.onreadystatechange = function () {
        if (this.readyState === XMLHttpRequest.DONE) {
            cb(this);
        }
    };

    xhr.send(params);
}

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

var forms = document.getElementsByClassName('xhr-form');
Array.from(forms).forEach(function (form) {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        requestForm(this.method, this.action, this, loginCallback);
    });
});

function loginCallback(result) {
    if (result.responseText === 'Succesvol ingelogd') {
        window.location = '/';
    } else {
        alert(result.responseText);
    }
}