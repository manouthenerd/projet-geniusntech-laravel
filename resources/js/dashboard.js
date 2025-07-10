import "../js/loader.js";

const upload = document.querySelector("#upload-input");

let image = document.querySelector("#image");

const toHidden = document.querySelector("#to-hidden");

const removeImageButton = document.querySelector("#close-button");

// Charger l'image pour un aperçu
upload.addEventListener("change", (e) => {
    showFile(e.target);
});

removeImageButton.addEventListener("click", (e) => {
    removeAll(upload);

    e.target.classList.add("hide-close-btn");

    toHidden.classList.remove("hidden");
});

function showFile(input) {
    const file = input.files[0];

    // Cacher le boutton de suppression de l'image
    removeButtonVisibility(file, removeImageButton);

    // Rendre l'image visible ou caché
    togglePreviewImageVisibility(file, image);

    // Instanciation de l'objet
    let reader = new FileReader();

    if (file) {
        // Conversion de l'image en url
        reader.readAsDataURL(file);

        // Association du chargement de l'image à un événement
        reader.onload = () => {
            image.src = reader.result;
            image.src
                ? toHidden.classList.add("hidden")
                : toHidden.classList.remove("hidden");
        };
    }
}

function removeButtonVisibility(file, button) {
    file
        ? button.classList.remove("hide-close-btn")
        : button.classList.add("hide-close-btn");
}

function togglePreviewImageVisibility(file, image) {
    file ? image.classList.remove("hidden") : image.classList.add("hidden");
}

function removeAll(upload) {
    upload.value = "";
    image.src = "";
    image.classList.add("hidden");
}
