const d = document;

const previewCtn = d.getElementById("previewCtn");
const preview = d.getElementById("preview");

const image = d.getElementById("image");
const removePreview = d.getElementById("removePreview");

image.addEventListener("change", (e) => {
    const file = e.target.files[0];
    const reader = new FileReader();

    reader.onload = (e) => {
        preview.src = e.target.result;
    };

    reader.readAsDataURL(file);
    previewCtn.classList.remove("hidden");
    image.classList.add("hidden");
});

d.addEventListener("DOMContentLoaded", () => {
    if (!image.getAttribute("value")) previewCtn.classList.add("hidden");
});

removePreview.addEventListener("click", () => {
    preview.src = "";
    previewCtn.classList.add("hidden");
    image.classList.remove("hidden");
});
