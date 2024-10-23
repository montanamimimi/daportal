class DotsGallery {
    constructor() {
        this.findGallerys();
    }

    findGallerys() {
        const galleryArray = document.querySelectorAll('.gallery-dots');

        galleryArray.forEach(gallery => {
            this.addGallery(gallery)
        })
    }

    addGallery(gallery) {
        const dots = gallery.querySelectorAll('.dot')
        

        dots.forEach(dot => {
            dot.addEventListener('click', (e) => {
                this.changeImage(dots, gallery, dot.dataset.id)
            })
        })
    }

    changeImage(dots, gallery, id) {
        const images = gallery.querySelectorAll('.image-item')

        images.forEach(image => {
            if (id == image.dataset.id) {
                image.classList.remove('image-item--hidden')
            } else {
                image.classList.add('image-item--hidden')
            }
        })

        dots.forEach(dot => {
            if (id == dot.dataset.id) {
                dot.classList.add('dot--active')
            } else {
                dot.classList.remove('dot--active')
            }
        })
    }
}

export default DotsGallery