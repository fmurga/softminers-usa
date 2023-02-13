
const setActiveClass = (event) => {
    const links = document.querySelectorAll(".nav-item-link");
    links.forEach((link) => {
        link.classList.remove("active");
    });
    event.currentTarget.classList.add("active");
};

document.addEventListener('DOMContentLoaded', function () {
    const splide = new Splide('.splide', {
        rewind: true,
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
    });
    splide.mount();

    const links = document.querySelectorAll(".nav-item-link");
    links.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault()
            setActiveClass(e);
        });
    });

    const container = document.getElementById("navigation");

    container.addEventListener("click", (event) => {
      if (event.target.classList.contains("nav-item-link")) {
        event.preventDefault();
        const originalUrl = event.target.href;
        const fragmentIdentifier = originalUrl.split('#')[1];
        const section = document.getElementById(fragmentIdentifier);
    
        if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
});
