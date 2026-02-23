const card = document.getElementById("tfCard");

document.querySelector(".tf-open").onclick = () => {
  card.classList.add("active");
};

document.querySelector(".tf-close").onclick = () => {
  card.classList.remove("active");
};

document.querySelectorAll(".tf-tab").forEach((tab) => {
  tab.onclick = () => {
    document
      .querySelectorAll(".tf-tab")
      .forEach((t) => t.classList.remove("active"));
    document
      .querySelectorAll(".tf-panel")
      .forEach((p) => p.classList.remove("active"));

    tab.classList.add("active");
    document.getElementById(tab.dataset.target).classList.add("active");
  };
});
