/* $(document).ready(function () {
    $('.carousel__inner').slick({
        speed: 600,
        centerMode: true,
        adaptiveHeight: false,
        variableWidth: true,
        prevArrow: '<button type="button" class="slick-prev"><img src="icons/carousel/prev.svg"></button>',
        nextArrow: '<button type="button" class="slick-next"><img src="icons/carousel/next.svg"></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    dots: true,
                    arrows: false
                }
            }
        ]
    });
}); */

const slider = tns({
    container: '.carousel__inner',
    items: 1,
    slideBy: 'page',
    autoplay: false,
    nav: false,
    controls: false,
    responsive: {
        640: {
            items: 2
        },
        900: {
            items: 1
        }
    }
});

document.querySelector('.prev').addEventListener('click', function () {
    slider.goTo('prev');
});

document.querySelector('.next').addEventListener('click', function () {
    slider.goTo('next');
});