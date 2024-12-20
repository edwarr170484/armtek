let navButtons = ['<svg width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d = "M31.583 12.916H6.87467L14.4372 3.83267C14.7908 3.40721 14.9609 2.85871 14.9101 2.30783C14.8593 1.75694 14.5918 1.24879 14.1663 0.895167C13.7409 0.541545 13.1924 0.371416 12.6415 0.422207C12.0906 0.472998 11.5825 0.740549 11.2288 1.166L0.812174 13.666C0.742093 13.7654 0.679423 13.8699 0.624674 13.9785C0.624674 14.0827 0.624675 14.1452 0.478841 14.2493C0.384411 14.4882 0.334968 14.7425 0.333008 14.9993C0.334968 15.2562 0.384411 15.5105 0.478841 15.7493C0.478841 15.8535 0.478841 15.916 0.624674 16.0202C0.679423 16.1288 0.742093 16.2332 0.812174 16.3327L11.2288 28.8327C11.4247 29.0678 11.67 29.257 11.9473 29.3866C12.2245 29.5162 12.5269 29.5832 12.833 29.5827C13.3198 29.5836 13.7915 29.4141 14.1663 29.1035C14.3773 28.9286 14.5517 28.7138 14.6795 28.4714C14.8073 28.229 14.8861 27.9638 14.9112 27.6909C14.9364 27.4181 14.9074 27.1429 14.8261 26.8812C14.7448 26.6196 14.6126 26.3765 14.4372 26.166L6.87467 17.0827H31.583C32.1355 17.0827 32.6654 16.8632 33.0561 16.4725C33.4468 16.0818 33.6663 15.5519 33.6663 14.9993C33.6663 14.4468 33.4468 13.9169 33.0561 13.5262C32.6654 13.1355 32.1355 12.916 31.583 12.916Z" fill = "#272727" /></svg>', '<svg width="34" height="30" viewBox="0 0 34 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.41699 12.916H27.1253L19.5628 3.83267C19.2092 3.40721 19.0391 2.85871 19.0899 2.30783C19.1407 1.75694 19.4082 1.24879 19.8337 0.895167C20.2591 0.541545 20.8076 0.371416 21.3585 0.422207C21.9094 0.472998 22.4175 0.740549 22.7712 1.166L33.1878 13.666C33.2579 13.7654 33.3206 13.8699 33.3753 13.9785C33.3753 14.0827 33.3753 14.1452 33.5212 14.2493C33.6156 14.4882 33.665 14.7425 33.667 14.9993C33.665 15.2562 33.6156 15.5105 33.5212 15.7493C33.5212 15.8535 33.5212 15.916 33.3753 16.0202C33.3206 16.1288 33.2579 16.2332 33.1878 16.3327L22.7712 28.8327C22.5753 29.0678 22.33 29.257 22.0527 29.3866C21.7755 29.5162 21.4731 29.5832 21.167 29.5827C20.6802 29.5836 20.2085 29.4141 19.8337 29.1035C19.6227 28.9286 19.4483 28.7138 19.3205 28.4714C19.1927 28.229 19.1139 27.9638 19.0888 27.6909C19.0636 27.4181 19.0926 27.1429 19.1739 26.8812C19.2552 26.6196 19.3874 26.3765 19.5628 26.166L27.1253 17.0827H2.41699C1.86446 17.0827 1.33455 16.8632 0.943851 16.4725C0.55315 16.0818 0.33366 15.5519 0.33366 14.9993C0.33366 14.4468 0.55315 13.9169 0.943851 13.5262C1.33455 13.1355 1.86446 12.916 2.41699 12.916Z" fill="#272727" /></svg>'];

$(document).ready(function () {
    $('.main-courses-slider').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            1480: {
                items: 3
            }
        },
        navText: navButtons,
        navContainer: $("#courses-navigation")
    });

    $('.complecs-programms').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            1180: {
                items: 3
            }
        },
        navText: navButtons,
        navContainer: $("#complecs-programms")
    });
    $('.online-courses').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        },
        navText: navButtons,
        navContainer: $("#online-courses")
    });

    $('.trainings').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        },
        navText: navButtons,
        navContainer: $("#trainings")
    });

    $('.sales-slider').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        items: 1,
        navText: navButtons,
        navContainer: $("#sales-slider")
    });

    $('.main-slider').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        items: 1,
        dots: false,
        navText: navButtons,
        navContainer: $("#main-slider")
    });

    $('.team-slider').owlCarousel({
        loop: true,
        margin: 50,
        nav: true,
        items: 3,
        navText: navButtons,
        navContainer: $("#team-slider"),
        responsive: {
            0: {
                items: 1
            },
            1200: {
                items: 2
            },
            1500: {
                items: 3
            }
        },
    });

    $('.product-same-slider').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    $('.rent-slider').owlCarousel({
        margin: 17,
        nav: true,
        items: 2,
        navText: navButtons,
        navContainer: $("#rent-slider")
    });
});