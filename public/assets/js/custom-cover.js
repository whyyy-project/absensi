const texts = [
    "Temukan Potensi Terbaikmu di Sekolah Kami! Kami adalah sekolah yang berdedikasi untuk memberikan pendidikan yang inspiratif, berkualitas, dan inklusif.",
    "Dengan staf pengajar yang berpengalaman dan peduli, kami berkomitmen untuk mencetak generasi muda yang cerdas, kreatif, dan berintegritas.",
    "Kurikulum kami didesain untuk mengembangkan potensi siswa secara holistik, baik dalam bidang akademik maupun karakter.",
    "Fasilitas modern kami menciptakan lingkungan belajar yang kondusif, memberikan siswa pengalaman belajar yang nyaman dan menarik.",
    "Kami juga menawarkan beragam kegiatan ekstrakurikuler yang memperkaya pengalaman siswa dalam bidang seni, olahraga, dan kegiatan sosial.",
    "Bergabunglah dengan kami dan jadilah bagian dari komunitas yang mendukung perkembangan penuh potensi siswa.",
    "Daftarkan dirimu sekarang dan mulailah perjalanan menuju masa depan yang sukses! "
];

let i = 0;
let textIndex = 0;
const typingText = document.getElementById('typing-text');

function typeWriter() {
    const text = texts[textIndex];

    if (i < text.length) {
        typingText.textContent += text.charAt(i);
        i++;
        setTimeout(typeWriter, 50); // Waktu pengetikan per karakter (ms)
    } else {
        // Menghapus teks sebelumnya sebelum melanjutkan ke teks berikutnya
        setTimeout(eraseText, 2000);
    }
}

function eraseText() {
    if (i > 0) {
        typingText.textContent = typingText.textContent.slice(0, -1);
        i--;
        setTimeout(eraseText, 20); // Waktu penghapusan per karakter (ms)
    } else {
        textIndex++;
        if (textIndex === texts.length) {
            textIndex = 0;
        }
        setTimeout(typeWriter, 500);
    }
}

typeWriter();

var topButton = document.getElementById("topButton");

window.addEventListener("scroll", function() {
    if (window.pageYOffset > 0) {
        topButton.style.display = "block";
    } else {
        topButton.style.display = "none";
    }
});

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        420: {
            items: 2
        },
        1000: {
            items: 5
        }
    }

});

var nav = $("#navbarSupportedContent");
var btn = $(".custom_menu-btn");
btn.click
btn.click(function(e) {

    e.preventDefault();
    nav.toggleClass("lg_nav-toggle");
    document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
});

$('.carousel').on('slid.bs.carousel', function() {
    $(".indicator-2 li").removeClass("active");
    indicators = $(".carousel-indicators li.active").data("slide-to");
    a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
})

var scroll = new SmoothScroll('a[data-scroll]', {
    speed: 1000, // Kecepatan scroll (dalam milidetik)
    easing: 'easeInOutCubic', // Gaya transisi scroll
    offset: 100 // Jarak offset dari elemen target (dalam piksel)
});