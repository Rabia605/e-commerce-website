// Hero slider
const slidesContainer = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

if (slidesContainer && slides.length > 0) {
  let currentIndex = 1;
  let slideInterval = setInterval(nextSlide, 4000);

  const firstClone = slides[0].cloneNode(true);
  const lastClone = slides[slides.length - 1].cloneNode(true);
  slidesContainer.appendChild(firstClone);
  slidesContainer.insertBefore(lastClone, slides[0]);

  function nextSlide() {
    currentIndex++;
    updateSlide();
  }

  function updateSlide() {
    slidesContainer.style.transition = "transform 0.5s ease-in-out";
    slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;

    if (currentIndex === slides.length + 1) {
      setTimeout(() => {
        slidesContainer.style.transition = "none";
        currentIndex = 1;
        slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
      }, 500);
    }

    if (currentIndex === 0) {
      setTimeout(() => {
        slidesContainer.style.transition = "none";
        currentIndex = slides.length;
        slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
      }, 500);
    }

    updateDots();
  }

  function updateDots() {
    dots.forEach((dot, index) => {
      dot.classList.toggle("active", index === (currentIndex - 1) % slides.length);
    });
  }

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      clearInterval(slideInterval);
      currentIndex = index + 1;
      updateSlide();
      slideInterval = setInterval(nextSlide, 4000);
    });
  });

  slidesContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
  updateDots();
}

// Brand carousel
const carousel = document.querySelector('.carousel-wrapper');
if (carousel) {
  carousel.addEventListener('mouseenter', () => {
    carousel.style.animationPlayState = 'paused';
  });

  carousel.addEventListener('mouseleave', () => {
    carousel.style.animationPlayState = 'running';
  });
}

// Trending products arrows (only when products overflow)
const trendingSection = document.querySelector('.trending-section');
const trendingContainer = document.querySelector('.trending-container');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
const cards = document.querySelectorAll('.trending-container .card');

if (trendingSection && trendingContainer && leftArrow && rightArrow && cards.length > 0) {
  const needsCarousel = () => trendingContainer.scrollWidth > trendingContainer.clientWidth + 5;

  if (!needsCarousel()) {
    trendingSection.classList.add('is-centered');
  } else {
    trendingSection.classList.remove('is-centered');
    const cardWidth = cards[0].offsetWidth + 24;
    let currentScroll = 0;

    rightArrow.addEventListener('click', () => {
      const maxScroll = Math.max(0, trendingContainer.scrollWidth - trendingContainer.clientWidth);
      if (currentScroll < maxScroll) {
        currentScroll = Math.min(currentScroll + cardWidth, maxScroll);
        trendingContainer.style.transform = `translateX(-${currentScroll}px)`;
      }
    });

    leftArrow.addEventListener('click', () => {
      if (currentScroll > 0) {
        currentScroll = Math.max(0, currentScroll - cardWidth);
        trendingContainer.style.transform = `translateX(-${currentScroll}px)`;
      }
    });
  }
}

// Black Friday popup
const popup = document.getElementById('black-friday-popup');
const closeButton = document.querySelector('.popup-close');

if (popup && closeButton) {
  closeButton.addEventListener('click', function () {
    popup.style.display = 'none';
  });

  setTimeout(() => {
    popup.style.display = 'flex';
  }, 1000);
}
