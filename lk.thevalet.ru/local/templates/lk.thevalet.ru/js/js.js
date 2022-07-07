const betaBtn = document.querySelector(".beta_pop");
const betaPop = document.querySelector("#popup__beta");

betaBtn.addEventListener("click", function (e) {
  betaPop.classList.add("open");
});
