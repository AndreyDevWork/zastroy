document.addEventListener('DOMContentLoaded', () => {
    const dropAreaAvatar = document.getElementById('drop-area-avatar');
    const fileInputAvatar = document.getElementById('fileInput');

    dropAreaAvatar.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropAreaAvatar.classList.add('dragover');
    });

    dropAreaAvatar.addEventListener('dragleave', () => {
        dropAreaAvatar.classList.remove('dragover');
    });

    dropAreaAvatar.addEventListener('drop', (event) => {
        event.preventDefault();

        dropAreaAvatar.classList.remove('dragover');

        const files = event.dataTransfer.files;
        if (files.length > 0) {
            fileInputAvatar.files = files;
        }
    });

    fileInputAvatar.addEventListener('change', () => {
        const files = fileInputAvatar.files;
    });
})