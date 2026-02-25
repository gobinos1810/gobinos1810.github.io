document.addEventListener("DOMContentLoaded", () => {

  const list = document.querySelector(".slides");
  const slides = document.querySelectorAll(".contenu");
  const leftBtn = document.querySelector(".fleche_gauche");
  const rightBtn = document.querySelector(".fleche_droite");
  const categories = document.querySelector(".categories");

  const total = slides.length;
  const step = slides[0].offsetWidth;

  let index = 0;

  list.style.transition = "transform 0.4s ease";

  // 🔹 Génération automatique des pastilles
  slides.forEach((slide, i) => {
    const img = slide.querySelector("model-viewer");
    const button = document.createElement("button");
    button.dataset.index = i;

    const thumb = document.createElement("model-viewer");
    thumb.src = img.src;
    thumb.alt = "";

    button.appendChild(thumb);
    categories.appendChild(button);

    button.addEventListener("click", () => {
      index = i;
      updatePosition();
    });
  });

  const buttons = document.querySelectorAll(".categories button");

  // 🔹 Création de l'indicateur actif glissant
  const indicator = document.createElement("div");
  indicator.classList.add("indicator");
  categories.appendChild(indicator);

  function updatePosition() {
    list.style.transform = `translateX(-${index * step}px)`;

    buttons.forEach(btn => btn.classList.remove("active"));
    buttons[index].classList.add("active");

    // Positionne l'indicateur sous la pastille active
    const activeBtn = buttons[index];
    indicator.style.left = activeBtn.offsetLeft + "px";
    indicator.style.width = activeBtn.offsetWidth + "px";
  }

  // Navigation flèches
  rightBtn.addEventListener("click", () => {
    index = (index + 1) % total;
    updatePosition();
  });

  leftBtn.addEventListener("click", () => {
    index = (index - 1 + total) % total;
    updatePosition();
  });

  updatePosition(); // initialise le premier actif

  // 🔹 Gestion resize pour l'indicateur
  window.addEventListener("resize", updatePosition);

});
