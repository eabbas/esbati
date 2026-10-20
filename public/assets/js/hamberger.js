const secondHeader = document.getElementById("secondHeader");
window.addEventListener("scroll", () => {
  if (window.scrollY >= 100) {
    secondHeader.classList.add("fixed", "top-0", "left-0", "right-0", "z-50");
  } else {
    secondHeader.classList.remove("fixed", "top-0", "left-0", "right-0", "z-50");
  }
});

const secondmine = document.getElementById("secondmine");
window.addEventListener("scroll", () => {
  if (window.scrollY >= 100) {
    secondmine.classList.add("md:top-50", "top-20");
  } else {
    secondmine.classList.remove("md:top-50", "top-20");
  }
});




const closs_Hamberger = document.getElementById('closs_Hamberger')
function Hamberger(state,element){
    if(state == "open"){
        element.nextElementSibling.classList.remove('translate-x-200')
        element.nextElementSibling.classList.add('translate-x-0')
    }
    if(state == "close"){
        element.parentElement.classList.remove('translate-x-0')
        element.parentElement.classList.add('translate-x-200')
    }
}







let currentSlide = 0;
const slides = document.querySelector('.slides');
const totalSlides = document.querySelectorAll('.slide').length;
function showSlide(index) {
    if (index >= totalSlides) currentSlide = 0;
    else if (index < 0) currentSlide = totalSlides - 1;
    else currentSlide = index;
    
    // تغییر جهت حرکت به راست (مثبت) برای RTL
    slides.style.transform = `translateX(${currentSlide * 100}%)`;
}
// معکوس کردن عملکرد دکمه‌ها برای RTL
document.querySelector('.prev').addEventListener('click', () => showSlide(currentSlide - 1));
document.querySelector('.next').addEventListener('click', () => showSlide(currentSlide + 1));
// تغییر جهت حرکت اتوماتیک
setInterval(() => showSlide(currentSlide - 1), 5000);

// مقداردهی اولیه
showSlide(0);



document.querySelectorAll(".product-carousel").forEach((carousel) => {
  const track = carousel.querySelector(".product-track");
  const nextBtn = carousel.querySelector(".next_product");
  const prevBtn = carousel.querySelector(".prev_product");
  if (!track) return;
  let autoPlay;
  const delay = 2000;
  // محاسبه فاصله حرکت هر محصول
  function getStep() {
    const product = track.querySelector(".product");
    if (!product) return 0;
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    return product.getBoundingClientRect().width + gap;
  }
  // رفتن به محصول بعدی (سمت چپ)
  function nextSlide() {
    const maxScroll = track.scrollWidth - track.clientWidth;
    if (maxScroll <= 1) return;
    const isRTL = getComputedStyle(track).direction === "rtl";
    if (isRTL) {
      if (Math.abs(track.scrollLeft) >= maxScroll - 5) {
        track.scrollTo({ left: 0, behavior: "smooth" });
      } else {
        track.scrollBy({
          left: -getStep(),
          behavior: "smooth",
        });
      }
    } else {
      if (track.scrollLeft >= maxScroll - 5) {
        track.scrollTo({ left: 0, behavior: "smooth" });
      } else {
        track.scrollBy({
          left: getStep(),
          behavior: "smooth",
        });
      }
    }
  }
  // رفتن به محصول قبلی (سمت راست)
  function prevSlide() {
    const isRTL = getComputedStyle(track).direction === "rtl";
    const step = getStep();
    track.scrollBy({
      left: isRTL ? step : -step,
      behavior: "smooth",
    });
  }
  // شروع حرکت خودکار
  function startAutoPlay() {
    stopAutoPlay();
    autoPlay = setInterval(nextSlide, delay);
  }
  // توقف حرکت خودکار
  function stopAutoPlay() {
    clearInterval(autoPlay);
  }
  // دکمه محصول بعدی
  nextBtn?.addEventListener("click", () => {
    nextSlide();
    startAutoPlay();
  });
  // دکمه محصول قبلی
  prevBtn?.addEventListener("click", () => {
    prevSlide();
    startAutoPlay();
  });
  // توقف هنگام قرار گرفتن موس روی اسلایدر
  carousel.addEventListener("mouseenter", stopAutoPlay);
  carousel.addEventListener("mouseleave", startAutoPlay);
  // اسکرول با چرخ موس
  track.addEventListener(
    "wheel",
    (event) => {
      if (Math.abs(event.deltaY) > Math.abs(event.deltaX)) {
        event.preventDefault();
        track.scrollBy({
          left: event.deltaY,
          behavior: "auto",
        });
      }
    },
    { passive: false }
  );
  // شروع حرکت خودکار
  startAutoPlay();
});