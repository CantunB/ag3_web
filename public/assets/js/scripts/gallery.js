const images = document.querySelectorAll('.gallery-img');
const containerImage = document.querySelector('.lightbox');
const imageContainer = document.querySelector('.img-show');
const closeModal = document.querySelector('.icon-close');

// Recorrer la lista de imagenes
images.forEach(image => {
    image.addEventListener('click', () => {
        addImage(image.getAttribute('src'), image.getAttribute('alt'));
    });
});

const addImage = (srcImage, altImage) => {
    containerImage.classList.toggle('move');
    imageContainer.classList.toggle('show');
    // agregar la img al lightbox
    imageContainer.src = srcImage;
}

// Funcion para cerrar el lightbox
closeModal.addEventListener('click', () => {
    containerImage.classList.toggle('move');
    imageContainer.classList.toggle('show');
});