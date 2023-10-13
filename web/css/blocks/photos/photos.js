document.addEventListener('DOMContentLoaded', () => {

    const dropArea = document.querySelector('.photos__upload');
    const fileInput = document.getElementById('file-input');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;

        // Передаем первый файл в инпут
        if (files.length > 0) {
            fileInput.files = files;
        }
    }
});