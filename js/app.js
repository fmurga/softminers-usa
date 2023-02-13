document.addEventListener( 'DOMContentLoaded', function() {
    const splide = new Splide( '.splide',  {
        rewind     : true,
        rewindSpeed: 1000,
        rewindByDrag: true,
        autoplay: true,
        perPage: 10,
        breakpoints: {
            992: {
                perPage: 6,
            },
            640: {
                perPage: 4,
            },
            370: {
                perPage: 3,
            },
        },
        start: 1,
        arrows: false,
        loop: true,
      } );
    splide.mount();

    const links = document.querySelectorAll(".nav-item-link");
    links.forEach((link) => {
        link.addEventListener("click", setActiveClass);
    });
  } );

  const setActiveClass = (event) => {
    const links = document.querySelectorAll(".nav-item-link");
    links.forEach((link) => {
      link.classList.remove("active");
    });
    event.currentTarget.classList.add("active");
  };