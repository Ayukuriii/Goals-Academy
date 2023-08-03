// Notification - Panel
const notificationPanel = document.querySelector(".notification-panel");
const closeBtn = document.querySelector("#button-1");

function closeNotificationPanel() {
    notificationPanel.style.display = "none";
}

closeBtn.addEventListener("click", closeNotificationPanel);

// Close Notification Panel
$(".panel-icon").click(function () {
    $(".notification-panel").hide();
});

var buttons = document.querySelectorAll(".button-product");
for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
        productsSwiper.slideTo(this.getAttribute("data-slide"));
        this.classList.add("clicked");
    });
}

for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
        for (var j = 0; j < buttons.length; j++) {
            buttons[j].classList.remove("clicked");
        }

        mySwiper.slideTo(this.getAttribute("data-slide"));
        this.classList.add("clicked");
    });
}

// Modal Pop Up (Semua Pop Up di Main Page)

// Register/Login
$("#step-login").click(function () {
    $("#modal-login").css("display", "flex");
});

$("body").click(function (event) {
    if ($(event.target).is("#modal-login")) {
        $("modal-login").hide();
    }
});

// Register
// Modal Product Dibimbing Sekali
$("#next-register").click(function () {
    $("#modal-register").css("display", "flex");
});

$(".close-icon").click(function () {
    $("#modal-register").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#modal-register")) {
        $("#modal-register").hide();
    }
});

// Pop-Up Diskon
$("#dapatkan-diskon").click(function () {
    $("#popup-diskon").css("display", "flex");
});

$("#close-icon").click(function () {
    $("popup-diskon").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#popup-diskon")) {
        $("#popup-diskon").hide();
    }
});

var modallogreg = document.getElementById("modal-login-register");
var modallogin = document.getElementById("modal-login");
var modalregister = document.getElementById("modal-register");

window.onclick = function (event) {
    if (event.target == modallogreg) {
        modallogreg.style.display = "none";
    }
    if (event.target == modallogin) {
        modallogin.style.display = "none";
    }
    if (event.target == modalregister) {
        modalregister.style.display = "none";
    }
};

$("#next-submit").click(function () {
    $("#modal-login").css("display", "flex");
});

// Modal Product Dibimbing Sekali
$("#join-now-1").click(function () {
    $("#modal1").css("display", "flex");
});

$(".close-icon").click(function () {
    $("#modal1").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#modal1")) {
        $("#modal1").hide();
    }
});

// Modal Dibimbing Berkelompok
$("#join-now-2").click(function () {
    $("#modal2").css("display", "flex");
});

$(".close-icon").click(function () {
    $("#modal2").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#modal2")) {
        $("#modal2").hide();
    }
});

// Modal Webinar Skripsi
$("#join-now-3").click(function () {
    $("#modal3").css("display", "flex");
});

$(".close-icon").click(function () {
    $("#modal3").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#modal3")) {
        $("#modal3").hide();
    }
});

// Modal Dbimbing Gratis
$("#join-now-4").click(function () {
    $("#modal4").css("display", "flex");
});

$(".close-icon").click(function () {
    $("#modal4").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#modal4")) {
        $("#modal4").hide();
    }
});

// Modal Ebook Skripsi
$("#join-now-5").click(function () {
    $("#modal5").css("display", "flex");
});

$(".close-icon").click(function () {
    $("#modal5").hide();
});

$("body").click(function (event) {
    if ($(event.target).is("#modal5")) {
        $("#modal5").hide();
    }
});

// Magnific Popup
$("#btn-play").magnificPopup({
    type: "inline",
    midClick: true,
});

// Accordion FAQ
const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        accordionItemHeaders.forEach(element => {
            if (element.getAttribute("data-toggle") != accordionItemHeader.getAttribute("data-toggle")) {
                const accordionItemBody = document.querySelector("#" + element.getAttribute("data-toggle"));
                if (element.classList.contains("active")) {
                    element.classList.remove("active");
                }
                accordionItemBody.style.maxHeight = 0;
            }
        });

        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});

// Promo
var promoSwiper1 = new Swiper("#swiper-1 .slide-content", {
    autoplay: true,
    autoplaySpeed: 5000,
    slidesPerView: 2,
    spaceBetween: 2,
    dots: true,
    grabCursor: true,
    fade: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
            centeredSlides: true,
        },
        950: {
            slidesPerView: 2,
            centeredSlides: true,
        },
    },
    navigation: {
        nextEl: "#button-promo-right",
        prevEl: "#button-promo-left",
    },
});

var promoSwiper2 = new Swiper("#swiper-2 .slide-content", {
    autoplay: true,
    autoplaySpeed: 5000,
    slidesPerView: 1,
    spaceBetween: 1,
    dots: true,
    grabCursor: true,
    allowTouchMove: false,
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            centeredSlides: true,
        },
        950: {
            slidesPerView: 1,
            centeredSlides: true,
        },
    }
});

// Testimoni
var testimoniSwiper = new Swiper("#slide-top", {
    autoplay: true,
    autoplaySpeed: 2500,
    slidesPerView: 2,
    spaceBetween: 1,
    allowTouchMove: false,
    fade: true,
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            centeredSlides: true,
        },
        640: {
            slidesPerView: 2,
            centeredSlides: true,
        },
    },
});

var testimoniSwiper2 = new Swiper("#slide-bottom", {
    autoplay: true,
    autoplaySpeed: 5000,
    slidesPerView: 2,
    spaceBetween: 1,
    allowTouchMove: false,
    fade: true,
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 2,
            centeredSlides: true,
        },
        640: {
            slidesPerView: 2,
            centeredSlides: true,
        },
    },
});

var testimoniSwiper3 = new Swiper("#slide-mobile", {
    autoplay: true,
    autoplaySpeed: 5000,
    slidesPerView: 1,
    spaceBetween: 1,
    dots: true,
    grabCursor: true,
    allowTouchMove: false,
    loop: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
            centeredSlides: true,
        },
        640: {
            slidesPerView: 2,
            centeredSlides: true,
        },
    }
});

// Toast show function
if (document.getElementById("myToast")) {
    const myToast = document.getElementById("myToast");
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(myToast);
    toastBootstrap.show();
}
