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

    // deshabilitar el desplazamiento vertical cuando se abre el modal
    $('body').css('overflow-y', 'hidden');
    // deshabilitar el desplazamiento vertical en moviles
    $('.lightbox').bind('touchmove', false);
    
}

// Funcion para cerrar el lightbox
containerImage.addEventListener('click', () => {
    containerImage.classList.toggle('move');
    imageContainer.classList.toggle('show');
    // restablecer el desplazamiento
    $('body').removeAttr('style');
    $('.lightbox').bind('touchmove', true);
});