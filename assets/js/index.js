document.addEventListener( 'DOMContentLoaded', () => {
    // let splideClass = document.querySelectorAll('.splide');

    // splideClass.forEach( ( splideItem ) => {
    //     let splide = new Splide( splideItem );
    //     splide.mount();
    // });

    let exploreSplide = document.querySelectorAll('.explore .splide');

    if ( exploreSplide.length > 0 ) {
        exploreSplide.forEach( ( splideItem ) => {
            let splide = new Splide( splideItem, {
                perPage: 1,
                pagination: false,
                arrows: false,
                autoplay: true,
                mediaQuery: 'min',
                breakpoints: {
                    768: {
                        destroy: true,
                    },
                }
            } );
            splide.mount();
        });
    }


    let testimonialsSplide = document.querySelectorAll('.testimonials .splide');

    if ( testimonialsSplide.length > 0 ) {
        testimonialsSplide.forEach( ( splideItem ) => {
            let splide = new Splide( splideItem, {
                perPage: 1,
                pagination: false,
                mediaQuery: 'min',
                breakpoints: {
                    768: {
                        perPage: 2,
                        padding: { 
                            left: 0, right: '5rem' 
                        },
                    },
                }
            } );
            splide.mount();
        });
    }


    let listsSplide = document.querySelectorAll('.lists .splide');

    if ( listsSplide.length > 0 ) {
        listsSplide.forEach( ( splideItem ) => {
            let splide = new Splide( splideItem, {
                pagination: false,
                grid: {
                    rows: 7,
                    cols: 1,
                    gap : {
                        row: '25PX',
                        col: '1.5rem',
                    },
                },            
                mediaQuery: 'min',
                breakpoints: {
                    768: {
                        destroy: true,
                    },
                }
            } );
            splide.mount( window.splide.Extensions );
        });
    }


    let articlesSplide = document.querySelectorAll('.articles .splide');

    if ( articlesSplide.length > 0 ) {
        articlesSplide.forEach( ( splideItem ) => {
            let splide = new Splide( splideItem, {
                perPage: 1,
                pagination: false,
                mediaQuery: 'min',
                breakpoints: {
                    768: {
                        destroy: true,
                    },
                }
            } );
            splide.mount();
        });
    }

    let imagesCarouselSplide = document.querySelectorAll('.images-carousel .splide');

    if ( imagesCarouselSplide.length > 0 ) {
        imagesCarouselSplide.forEach( ( splideItem ) => {
            let splide = new Splide( splideItem, {
                perPage: 1,
                fixedWidth : '256px',
                arrows  : false,
                pagination: false,
                mediaQuery: 'min',
                gap: '12px',
                padding: { 
                    left: '24px', right: '140px' 
                },
                breakpoints: {
                    475: {
                        fixedWidth : '372px',
                        padding: { 
                            left: '24px', right: '124px' 
                        },
                    },
                    769: {
                        perPage: 3,
                        focus  : 'center',
                        fixedWidth : '24.5vw',
                        padding: { 
                            left: '15%', right: '24px' 
                        },
                        gap: '24px',
                    },
                }
            } );
            splide.mount();
        });
    }


    let getLists = document.querySelectorAll(".article-content ul:not(.splide__list), .article-content ol");
    getLists.forEach((list, id) => {
        let newNode = document.createElement("div");
    
        list.parentNode.insertBefore(newNode, list);
        newNode.appendChild(list);

        newNode.classList.add("list-container");
    });

    let dropdownClic = document.querySelectorAll(".dropdown-clic");

    dropdownClic.forEach((item, index) => {
        item.addEventListener('click', () => {
            item.parentNode.classList.toggle("active");
            
            let svg = item.querySelector("svg");
            if ( item.parentNode.classList.contains("active") ) {
                svg.style.transform = "rotate(180deg)";
            } else {
                svg.style.transform = "rotate(0deg)";
            }
        });
    });

    let burger = document.querySelector(".burguer");
    let close = document.querySelector(".close");
    let htmlElemet = document.querySelector("html");
    let burgerMenu = document.querySelector(".burger-menu");
    let overlay = document.querySelector(".overlay");

    burger.addEventListener("click", () => {
        let tl = gsap.timeline();

        tl.to(overlay, {
            top: "0",
            bottom: "0",
            duration: 0.4,
            onUpdate: () => {
                overlay.removeAttribute("hidden");
            }
        });
        tl.to(burgerMenu, {
            top: "0",
            bottom: "0",
            duration: 0.6,
            onUpdate: () => {
                burgerMenu.removeAttribute("hidden");
            },
            onComplete: () => htmlElemet.style.overflowY = 'hidden'
        });
    });

    close.addEventListener("click", () => {
        htmlElemet.style.overflowY = '';
        let tl = gsap.timeline();

        tl.to(burgerMenu, {
            top: "-100vh",
            bottom: "auto",
            duration: 0.3,
            onUpdate: () => {
                burgerMenu.setAttribute("hidden", "");
            }
        });
        tl.to(overlay, {
            top: "-100vh",
            bottom: "auto",
            duration: 0.15,
            onUpdate: () => {
                overlay.setAttribute("hidden", "");
            }
        });
    });

    let svgUrl =  `
        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13 23L23 13M23 13H13M23 13V23" stroke="#757575" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <rect x="0.5" y="0.5" width="35" height="35" rx="17.5" stroke="#757575"/>
        </svg>
    `;

    let svgUrlHover =  `
        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="36" height="36" rx="18" fill="#E2E700"/>
            <path d="M13 23L23 13M23 13H13M23 13V23" stroke="#122023" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    `;
    let linksHeader = document.querySelectorAll(".header-list li:not(.current-menu-item) a");
    let currentLinkItem = document.querySelector(".header-list li.current-menu-item a");
    
    linksHeader.forEach((item, index) => 
        item.insertAdjacentHTML('beforeend', svgUrl)
    );

    currentLinkItem.insertAdjacentHTML('beforeend', svgUrlHover);
});