// JAK WYCIĄGAĆ DATA ATRYBUTY Z ELEMENTU?
// data-key:            target.dataset.key
// data-michal:         target.dataset.michal
// data-pyton-jajko:    target.dataset.michalLukas


document.addEventListener('DOMContentLoaded', function () {
    if ('IntersectionObserver' in window) {
      /*---------------------------------------------
      * INTERSECTION OBSERVER FOR BACKGROUND IMAGES
      ---------------------------------------------*/
  
      // Wyciągamy wszystkie elementy z klasą .lazyload-bg, które będizemy obserwowali
      const backgroundImages = document.querySelectorAll('.lazyload-bg');
  
      // Tworzymy funkcję, która będzie wywoływana, gdy element pojawi się w obszarze widoczności
      const intersectionHandlerForBackgrounds = function (entries) {
        entries.map((entry) => {
          if (entry.isIntersecting) {
  
            // entry.target = twój element z klasą .lazyload-bg
            entry.target.style.backgroundImage = entry.target.dataset.backgroundImage;
            delete entry.target.dataset.backgroundImage;
            backgroundObserver.unobserve(entry.target);
          }
        });
      };
  
      // Tworzymy obserwatora, który będzie wywoływał funkcję intersectionHandler
      const backgroundObserver = new IntersectionObserver(intersectionHandlerForBackgrounds);
  
      // Dodajemy obserwatora do wszystkich elementów z klasą .lazyload-bg
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
  
      // const myImage = document.getElementById('Image')
      // imagesObserver.observe(myImage)
    } else {
  
      const backgroundImages = document.querySelectorAll('.lazyload-bg, .lazyload-image');
  
      backgroundImages.forEach(function (backgroundImage) {
        // JEŻELI:
        //    backgroundImage = <img class="lazyload-bg styled-background dupa" />
        // TO:
        //    classList zwróci = ['lazyload-bg', 'styled-background', 'dupa']
  
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
  