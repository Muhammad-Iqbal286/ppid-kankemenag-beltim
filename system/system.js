// Active menu underline
document.querySelectorAll(".nav-link").forEach((link) => {
  link.addEventListener("click", function () {
    document.querySelectorAll(".nav-link").forEach((l) => {
      if (l.classList.contains("active")) {
        l.classList.remove("active");
        l.classList.add("inactive"); // zoom-out
      }
    });

    this.classList.remove("inactive");
    this.classList.add("active"); // zoom-in
  });
});

// Unit carousel infinite
const track = document.querySelector(".unit-track");
const cards = document.querySelectorAll(".unit-card");

let index = 0;

function updateCarousel() {
  const width = cards[0].offsetWidth + 20;
  track.style.transform = `translateX(-${index * width}px)`;

  cards.forEach((c) => c.classList.remove("active"));
  cards[index + 1]?.classList.add("active");
}

setInterval(() => {
  index++;

  if (index >= cards.length) {
    index = 0;
  }

  updateCarousel();
}, 2500);

// cs menu

const csBtn = document.getElementById("csBtn");
const csMenu = document.querySelector(".cs-menu");

csBtn.addEventListener("click", () => {
  csMenu.classList.toggle("active");
});
