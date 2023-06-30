function test() {
    alert("test complete");
}
// Navbar Icon
$(".navbar-toggler").click(function () {
    $(this).toggleClass("collapsed");
    if ($(this).hasClass("collapsed")) {
        $(this).html('<i class="fas fa-times fs-1"></i>');
    } else {
        $(this).html('<i class="fas fa-bars fs-1"></i>');
    }
});

// Login
// var input = document.getElementById("email");
// var button = document.getElementById("next-submit");
// input.addEventListener("change", function () {
//     if (input.value != "") {
//         input.style.border = "1px solid #FE7E1F";
//         button.style.backgroundColor = "#FE7E1F";
//     } else {
//         input.style.border = "";
//         button.style.backgroundColor = "";
//     }
// });

var $loginInput = $(".form-login .form-control");
var $loginButton = $("#submit-login")[0];
var $registerInput = $(".form-register .form-control");
var $registerButton = $("#submit-register")[0];

function checkInput() {
    var trigger = false;
    $loginInput.each(function() {
        if ($(this).val()) {
            trigger = true;
        } else {
            trigger = false;
            return false;
        }
    })
    return trigger;
}

function updateButton() {
    checkInput() ? $loginButton.style.backgroundColor='#fe7e1f' : $loginButton.style.backgroundColor='';
}

$loginInput.each($(this).change(updateButton))

function checkInput() {
    var trigger = false;
    $registerInput.each(function() {
        if ($(this).val()) {
            trigger = true;
        } else {
            trigger = false;
            return false;
        }
    })
    return trigger;
}

function updateButton() {
    checkInput() ? $registerButton.style.backgroundColor='#fe7e1f' : $registerButton.style.backgroundColor='';
}

$registerInput.each($(this).change(updateButton))

// for (var i = 0; i < input.length; i++) {
//     input[i].addEventListener("change", function () {
//         if (this.value != "") {
//             // this.style.border = "1px solid #FE7E1F";
//             button.style.backgroundColor = "#FE7E1F";
//         } else {
//             // this.style.border = "";
//             button.style.backgroundColor = "";
//         }
//     });
// }

// Notification - Panel
// const notiificationPanel = document.querySelector(".notification-panel");
// const closeBtn = document.querySelector("#button-1");

// function closeNotificationPanel() {
//     notiificationPanel.style.display = "none";
// }

// closeBtn.addEventListener("click", closeNotificationPanel);

// // Close Notification Panel
// $(".panel-icon").click(function () {
//     $(".notification-panel").hide();
// });

// Promo

var promoSwiper = new Swiper(".slide-content", {
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

// Program
// var productsSwiper = new Swiper(".slider", {
//   slidesPerView: 1,
//   spaceBetween: 1,
//   loop: true,
//   breakpoints: {
//     0: {
//       slidesPerView: 1,
//       centeredSlides: true,
//     },
//     950: {
//       slidesPerView: 1,
//       centeredSlides: true,
//     },
//   },
//   navigation: {
//     nextEl: "#button-product-right",
//     prevEl: "#button-product-left",
//   },
// });

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
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight =
                accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});

// Testimoni
var testimoniSwiper = new Swiper("#slide-top", {
    autoplay: true,
    autoplaySpeed: 2500,
    slidesPerView: 2,
    spaceBetween: 0,
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
    slidesPerView: 3,
    spaceBetween: 0,
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

// Javascript for Responsive Mobile
function mobileDisplay() {
    var productsSwiper = new Swiper(".slide-content", {
        slidesPerView: 1,
        spaceBetween: 1,
        loop: true,
        autoplay: true,
        breakpoints: {
            0: {
                slidesPerView: 1,
                centeredSlides: true,
                spaceBetween: 10,
            },
            950: {
                slidesPerView: 1,
                centeredSlides: true,
            },
        },
        navigation: {
            nextEl: "#button-product-right",
            prevEl: "#button-product-left",
        },
    });

    // var productsSwiper = new Swiper(".slider", {
    //   breakpoints: {
    //     950: {
    //       slidesPerView: 1,
    //       centeredSlides: true,
    //     },
    //     475: {
    //       slidesPerView: 2,
    //       centeredSlides: false,
    //     },
    //   },
    // });
}

function mobileTestimoni() {
    var testimoniSwiper = new Swiper("#slide-top", {
        autoplay: true,
        autoplaySpeed: 2500,
        slidesPerView: 1,
        spaceBetween: 0,
        fade: true,
        loop: true,
        direction: "vertical", // menambahkan opsi direction
        breakpoints: {
            0: {
                slidesPerView: 1, // mengubah slidesPerView untuk orientasi vertikal
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
        slidesPerView: 1,
        spaceBetween: 0,
        fade: true,
        loop: true,
        direction: "vertical", // menambahkan opsi direction
        breakpoints: {
            0: {
                slidesPerView: 1, // mengubah slidesPerView untuk orientasi vertikal
                centeredSlides: true,
            },
            640: {
                slidesPerView: 2,
                centeredSlides: true,
            },
        },
    });
}
window.onload = function () {
    if (window.innerWidth <= 475) {
        mobileDisplay();
        // mobileTestimoni();
    }
};

window.onresize = function () {
    if (window.innerWidth <= 475) {
        mobileDisplay();
        // mobileTestimoni();
    }
};

// function sendEmail() {
//   let emailDiskon = document.getElementById("email-diskon").value;
//   if (!emailDiskon == "") {
//     Email.send({
//       Host: "smtp.elasticemail.com",
//       Username: "harisu1234@gmail.com",
//       Password: "0610D20DC730BC4249A2310209524E536767",
//       To: "harisu1234@gmail.com",
//       From: "ekadianharis@gmail.com",
//       Subject: "Goals Academy Promo Code",
//       Body: "test goals academy complete",
//     }).then((message) => alert("mail sent successfully"));
//     console.log(emailDiskon);
//   } else {
//     alert("Silahkan isi email dahulu!");
//   }
// }

// function test() {
//   alert("mail sent");
// }

// Toast show function
const myToast = document.getElementById("myToast");
const toastBootstrap = bootstrap.Toast.getOrCreateInstance(myToast);
toastBootstrap.show();
