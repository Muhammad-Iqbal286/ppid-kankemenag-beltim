function openModal(id) {
  const modal = document.getElementById(id);
  modal.style.display = "flex";
  setTimeout(() => {
    modal.classList.add("active");
  }, 10);
}

function closeModal(id) {
  const modal = document.getElementById(id);
  modal.classList.remove("active");
  setTimeout(() => {
    modal.style.display = "none";
  }, 400);
}
