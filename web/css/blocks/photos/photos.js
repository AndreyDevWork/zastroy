document.addEventListener('DOMContentLoaded', () => {
    const dropArea = document.querySelectorAll('.photos__upload');
    const fileInput = document.getElementById('file-input');
    const fileInput2 = document.getElementById('file-input2');

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.forEach(drop => {
            drop.addEventListener(eventName, preventDefaults, false);
        })
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    dropArea.forEach(drop => {
        drop.addEventListener('drop', handleDrop, false);
    })

    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;
        let targetInput = e.target.closest('.photos__upload').querySelector('input[type="file"]');

        if (files.length > 0) {
            targetInput.files = files;
        }
    }
});