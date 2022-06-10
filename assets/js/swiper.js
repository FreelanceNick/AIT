const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },

    preloadImages: false,
    lazy: true,

    
    autoplay: {
        delay: 5000,
            disableOnInteraction: false
    },
	watchSlidesProgress: true,
});


swiper.on('beforeInit', function () {
    console.log('slide changed');

    var text = document.querySelector(".swiper-slide-active .sliderImg");
    console.log(text);
    var description = text.dataset.description;

    document.getElementById("sliderText").innerText = description;
    console.log(description);
});

swiper.on('slideNextTransitionEnd', function () {
    console.log('slide changed');

    var text = document.querySelector(".swiper-slide-active .sliderImg");
    console.log(text);
    var description = text.dataset.description;

    document.getElementById("sliderText").innerText = description;
    console.log(description);
});


swiper.on('slidePrevTransitionEnd', function () {
    console.log('slide changed');

    var text = document.querySelector(".swiper-slide-active .sliderImg");
    console.log(text);
    var description = text.dataset.description;

    document.getElementById("sliderText").innerText = description;
    console.log(description);
});