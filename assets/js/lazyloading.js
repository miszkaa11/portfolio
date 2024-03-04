
document.addEventListener('DOMContentLoaded', function () {
    if ('IntersectionObserver' in window) {
        /*---------------------------------------------
        * INTERSECTION OBSERVER FOR BACKGROUND IMAGES
        ---------------------------------------------*/

        const backgroundImages = document.querySelectorAll('.lazyload-bg');

        const intersectionHandlerForBackgrounds = function (entries) {
            entries.map((entry) => {
                if (entry.isIntersecting) {

                    entry.target.style.backgroundImage = entry.target.dataset.backgroundImage;
                    delete entry.target.dataset.backgroundImage;
                    backgroundObserver.unobserve(entry.target);
                }
            });
        };

        const backgroundObserver = new IntersectionObserver(intersectionHandlerForBackgrounds);

        backgroundImages.forEach(sliderImage => backgroundObserver.observe(sliderImage));

        /*---------------------------------------------
        * INTERSECTION OBSERVER FOR PLAIN IMAGES
        ---------------------------------------------*/

        const images = document.querySelectorAll('.lazyload-image');

        const intersectionHandlerForImages = function (entries) {
            entries.map((entry) => {
                if (entry.isIntersecting) {
                    entry.target.src = entry.target.dataset.src;
                    delete entry.target.dataset.src;
                    imagesObserver.unobserve(entry.target);
                }
            });
        };

        const imagesObserver = new IntersectionObserver(intersectionHandlerForImages);

        images.forEach(sliderImage => imagesObserver.observe(sliderImage));

    } else {

        const backgroundImages = document.querySelectorAll('.lazyload-bg, .lazyload-image');

        backgroundImages.forEach(function (backgroundImage) {
            if (backgroundImage.classList.contains('lazyload-bg')) {
                backgroundImage.style.backgroundImage = backgroundImage.dataset.backgroundImage;
                delete backgroundImage.dataset.backgroundImage;
            } else {
                backgroundImage.src = backgroundImage.dataset.src;
                delete backgroundImage.dataset.src;
            }
        });

    }
});
