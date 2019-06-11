let editor = new Quill('#quill', {
    modules: {
        toolbar: [
            ['bold', 'italic', 'underline', 'strike'],
            ['link', 'image'],
            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            ['clean']
        ]
    },
    theme: 'snow'
});
let htmlEdit = document.getElementById('quillHtml'),
    edit = true;

editor.on('text-change', function () {
    if (edit) htmlEdit.value = editor.root.innerHTML;
    edit = true;
});

htmlEdit.addEventListener('input', function () {
    edit = false;
    editor.root.innerHTML = this.value;
});