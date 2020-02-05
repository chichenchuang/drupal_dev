
window.onload = function() {
    w3.addClass('#main-navigation ul', 'w3-navbar');
    w3.addClass('#main-navigation ul li', 'w3-padding-hor-16');

    $('.banners').slick({
        arrows: false,
        autoplay: true,
        autoplaySpeed: 3000,
    });
}
