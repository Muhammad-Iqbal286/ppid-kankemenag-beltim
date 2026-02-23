window.addEventListener("load", () => {
  const track = document.querySelector(".news-track");
  if (!track) return;

  let cards = track.querySelectorAll(".news-small-card");
  if (cards.length === 0) return;

  let autoSlide;

  /* ================= CLONE SEMUA CARD (SUPAYA LOOP MULUS) ================= */

  const originalCards = Array.from(cards);

  originalCards.forEach((card) => {
    const cloneFront = card.cloneNode(true);
    const cloneBack = card.cloneNode(true);

    track.appendChild(cloneFront);
    track.insertBefore(cloneBack, track.firstChild);
  });

  cards = track.querySelectorAll(".news-small-card");

  // mulai dari tengah (biar bisa geser kiri kanan tanpa batas)
  let index = originalCards.length;

  /* ================= HITUNG WIDTH ================= */

  function getCardWidth() {
    return cards[0].offsetWidth + 20;
  }

  /* ================= POSISI AWAL ================= */

  function setInitialPosition() {
    track.style.transition = "none";
    track.style.transform = `translateX(-${getCardWidth() * index}px)`;
  }

  setInitialPosition();

  /* ================= FUNCTION NEXT ================= */

  function moveNext() {
    index++;
    track.style.transition = "0.6s ease";
    track.style.transform = `translateX(-${getCardWidth() * index}px)`;
  }

  /* ================= FUNCTION PREV ================= */

  function movePrev() {
    index--;
    track.style.transition = "0.6s ease";
    track.style.transform = `translateX(-${getCardWidth() * index}px)`;
  }

  /* ================= RESET SEAMLESS ================= */

  track.addEventListener("transitionend", () => {
    // jika sudah terlalu kanan → balik ke tengah
    if (index >= cards.length - originalCards.length) {
      track.style.transition = "none";
      index = originalCards.length;
      track.style.transform = `translateX(-${getCardWidth() * index}px)`;
    }

    // jika terlalu kiri → balik ke tengah
    if (index <= 0) {
      track.style.transition = "none";
      index = originalCards.length;
      track.style.transform = `translateX(-${getCardWidth() * index}px)`;
    }
  });

  /* ================= AUTO LOOP ================= */

  function startAutoSlide() {
    autoSlide = setInterval(moveNext, 2500);
  }

  function stopAutoSlide() {
    clearInterval(autoSlide);
  }

  startAutoSlide();

  /* ================= PAUSE SAAT HOVER ================= */

  track.addEventListener("mouseenter", stopAutoSlide);
  track.addEventListener("mouseleave", startAutoSlide);

  /* ================= ARROW CONTROL ================= */

  const arrowRight = document.querySelector(".news-arrow.right");
  const arrowLeft = document.querySelector(".news-arrow.left");

  if (arrowRight) arrowRight.onclick = moveNext;
  if (arrowLeft) arrowLeft.onclick = movePrev;

  /* ================= FIX RESPONSIVE RESIZE ================= */

  window.addEventListener("resize", setInitialPosition);
});
